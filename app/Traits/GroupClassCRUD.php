<?php

namespace App\Traits;

use App\Models\GroupClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait GroupClassCRUD
{
    public function createGroupClass(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'subject' => ['required'],
            'total_seats' => ['required'],
            'price' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]);

        $groupClass = GroupClass::create([
            'consultant_id' => Auth::id(),
            'title' => $request['title'],
            'description' => $request['description'],
            'subject' => $request['subject'],
            'total_seats' => $request['total_seats'],
            'price' => $request['price'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'status' => 'Alive',
        ]);

        if ($groupClass) {
            return redirect()->back()->with('success', 'New Group Class Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function updateGroupClass(Request $request)
    {
        $groupClass = GroupClass::find($request->input('cid'))->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'subject' => $request['subject'],
            'total_seats' => $request['total_seats'],
            'price' => $request['price'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
        ]);

        if ($groupClass) {
            return redirect()->back()->with('success', 'Group Class Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function deleteGroupClass($id)
    {
        $groupClass = GroupClass::where('id', $id)->delete();

        if ($groupClass) {
            return redirect()->back()->with('success', 'Group Class Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
