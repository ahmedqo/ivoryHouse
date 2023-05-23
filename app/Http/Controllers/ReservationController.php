<?php

namespace App\Http\Controllers;

use App\Functions\MailFunction;
use App\Models\Property;
use App\Models\Setting;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ReservationController extends Controller
{
    public function index()
    {
        $data = Reservation::with('property')->orderBy('id', 'DESC')->get();
        return view('reservation.index', compact('data'));
    }

    public function edit($id)
    {
        $data =  Reservation::with('property')->where('id', $id)->first();
        $data->extra = json_decode($data->extra);
        $data['icecream'] = array_filter($data->extra, function ($ext) {
            return $ext->name === 'icecream';
        }, 1);
        $data['kayak'] = array_filter($data->extra, function ($ext) {
            return $ext->name === 'kayak';
        }, 1);
        $properties = Property::orderBy('id', 'DESC')->get();

        return view('reservation.edit', compact('data', 'properties'));
    }

    public function cancel($id)
    {
        $current = Reservation::findorfail($id);
        $current->update(['status' => -1]);
        MailFunction::cancel($current->email, [
            'id' => $current->property,
            'reservation' => $current,
        ]);
        return Redirect::route('views.reservations.index')->with([
            'message' => 'تم الإلغاء بنجاح',
            'type' => 'success'
        ]);
    }

    public function active($id)
    {
        $current = Reservation::findorfail($id);

        $startDate = $current->startDate;
        $endDate = $current->endDate;

        $exist = Reservation::where('status', 1)
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('startDate', [$startDate, $endDate])
                    ->orWhereBetween('endDate', [$startDate, $endDate])
                    ->orWhere(function ($query) use ($startDate, $endDate) {
                        $query->where('startDate', '<=', $startDate)
                            ->where('endDate', '>=', $endDate);
                    });
            })
            ->first();

        if ($exist) {
            return Redirect::route("views.reservations.index")->with([
                'message' => 'عذرًا، تم استئجار العقار في هذه الفترة',
                'type' => 'error'
            ]);
        }

        $current->update(['status' => 1]);
        MailFunction::reservation($current->email, [
            'id' => $current->property,
            'reservation' => $current,
        ]);
        return Redirect::route('views.reservations.index')->with([
            'message' => 'تم الإلغاء بنجاح',
            'type' => 'success'
        ]);
    }

    public function store(Request $request, $id)
    {
        $property = Property::findorfail($id);
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'startDate' => ['required', 'date', 'after:today'],
            'endDate' => ['required', 'date', 'after:startDate'],
        ]);

        if ($validator->fails()) {
            return Redirect::route("views.property.show", $property->slug)->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        $exist = Reservation::where('property', $id)->where('status', 1)
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('startDate', [$startDate, $endDate])
                    ->orWhereBetween('endDate', [$startDate, $endDate])
                    ->orWhere(function ($query) use ($startDate, $endDate) {
                        $query->where('startDate', '<=', $startDate)
                            ->where('endDate', '>=', $endDate);
                    });
            })
            ->first();

        if ($exist) {
            return Redirect::route("views.property.show", $property->slug)->with([
                'message' => 'عذرًا، تم استئجار العقار في هذه الفترة',
                'type' => 'error'
            ]);
        }
        $json = [];
        if ($request->has('icecream') && $request->has('icecream_days'))
            array_push($json, [
                'name' => $request->icecream,
                'days' => intval($request->icecream_days),
                'total' => Setting::first()->icecream * intval($request->icecream_days)
            ]);

        if ($request->has('kayak') && $request->has('kayak_days'))
            array_push($json, [
                'name' => $request->kayak,
                'days' => intval($request->kayak_days),
                'total' => Setting::first()->kayak * intval($request->kayak_days)
            ]);

        $current = Reservation::create([
            'property' => $id,
            'name' => $request->name,
            'nationality' => $request->nationality,
            'email' => $request->email,
            'phone' => $request->phone,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'extra' => json_encode($json)
        ]);

        $data = [
            'id' => $id,
            'reservation' => $current
        ];
        MailFunction::reservation($request->email, $data);
        MailFunction::reservation(env('MAIL_SYSTEM_ADDRESS'), $data);

        return Redirect::route('views.property.show', $property->slug)->with([
            'message' => 'تم الاستئجار بنجاح',
            'type' => 'success'
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'property' => ['required', 'integer'],
            'status' => ['required', 'string'],
            'name' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date', 'after:startDate'],
        ]);

        if ($validator->fails()) {
            return Redirect::route("views.property.show", $property->slug)->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        $exist = Reservation::where('property', $id)->where('status', 1)
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('startDate', [$startDate, $endDate])
                    ->orWhereBetween('endDate', [$startDate, $endDate])
                    ->orWhere(function ($query) use ($startDate, $endDate) {
                        $query->where('startDate', '<=', $startDate)
                            ->where('endDate', '>=', $endDate);
                    });
            })
            ->first();

        if ($exist) {
            return Redirect::route("views.property.show", $property->slug)->with([
                'message' => 'عذرًا، تم استئجار العقار في هذه الفترة',
                'type' => 'error'
            ]);
        }
        $json = [];
        if ($request->has('icecream') && $request->has('icecream_days'))
            if ($request->icecream === "1")
                array_push($json, [
                    'name' => 'icecream',
                    'days' => intval($request->icecream_days),
                    'total' => Setting::first()->icecream * intval($request->icecream_days),
                    'description' => $request->icecream_description,
                ]);

        if ($request->has('kayak') && $request->has('kayak_days'))
            if ($request->kayak === "1")
                array_push($json, [
                    'name' => 'kayak',
                    'days' => intval($request->kayak_days),
                    'total' => Setting::first()->kayak * intval($request->kayak_days),
                    'description' => $request->kayak_description,
                ]);

        $current = Reservation::findorfail($id);

        if (intval($current->status) != intval($request->status) && intval($request->status) == -1) {
            MailFunction::cancel($request->email, [
                'id' => $request->property,
                'reservation' => $current,
            ]);
        }

        if ((intval($current->status) != intval($request->status) && intval($request->status) == 1) || intval($current->property) != intval($request->property)) {
            MailFunction::reservation($request->email, [
                'id' => $request->property,
                'reservation' => $current,
            ]);
        }

        $current->update([
            'property' => $request->property,
            'name' => $request->name,
            'nationality' => $request->nationality,
            'email' => $request->email,
            'phone' => $request->phone,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'status' => $request->status,
            'extra' => json_encode($json)
        ]);

        return Redirect::route('views.reservations.index')->with([
            'message' => 'تم التحديث بنجاح',
            'type' => 'success'
        ]);
    }
}
