<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeBoard;

class NoticeBoardController extends Controller
{
    // Display the list of notices
    public function index()
    {
        $notices = NoticeBoard::all();
        return view('frontend.backend.noticeboard.notice_index', compact('notices'));
    }

    // Show the form to create a new notice
    public function create()
    {
        return view('frontend.backend.noticeboard.notice_create');
    }

    // Store a new notice in the database
    public function store(Request $request)
    {
        $request->validate([
            'notice_board' => 'required|string|max:255',
            'link' => 'nullable|url',
        ]);

        NoticeBoard::create($request->all());
        return redirect()->route('noticeboard.index')->with('success', 'Notice added successfully!');
    }

    // Show the form to edit an existing notice
    public function edit($id)
    {
        $notice = NoticeBoard::findOrFail($id);
        return view('frontend.backend.noticeboard.notice_edit', compact('notice'));
    }

    // Update an existing notice in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'notice_board' => 'required|string|max:255',
            'link' => 'nullable|url',
        ]);

        $notice = NoticeBoard::findOrFail($id);
        $notice->update($request->all());
        return redirect()->route('noticeboard.index')->with('success', 'Notice updated successfully!');
    }

    // Delete a notice
    public function destroy($id)
    {
        $notice = NoticeBoard::findOrFail($id);
        $notice->delete();
        return redirect()->route('noticeboard.index')->with('success', 'Notice deleted successfully!');
    }
}
