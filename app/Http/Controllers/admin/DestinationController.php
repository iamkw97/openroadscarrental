<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('app.dashboards.admin.website_customization.destinations', compact('destinations'));
    }
    public function create()
    {
        return view('app.dashboards.admin.website_customization.newdestination');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('destination_image')) {
            $image = $request->file('destination_image');
            $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
            $image->move('img/destinations', $imageName);
        }

        $destination = Destination::create([
            'destination_title' => $data['destination_title'],
            'published_date' => $data['published_date'],
            'destination_description' => $data['destination_description'],
            'destination_image' => $destination_image = $imageName
        ]);

        if ($destination) {
            return response('Success', 200);
        } else {
            return response('Error', 400);
        }
    }
    public function delete(Request $request, $id)
    {
        $delete_destination = Destination::destroy($id);

        if ($delete_destination) {
            return response('Success', 200);
        } else {
            return response('Error', 400);
        }
    }
}
