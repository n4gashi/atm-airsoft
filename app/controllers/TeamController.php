<?php

class TeamController extends BaseController
{

    public function index()
    {
        $members = User::where('team_id', '=', 1)->get();
        return View::make('team.index', compact('members'));
    }

}
