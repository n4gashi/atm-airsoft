@extends('layout.default')

@section('title')
    <h2><span class="boldy">Notre</span> équipe</h2>
@overwrite

@section('content')
<div class="row" style="max-width:100%;">
    @foreach($members as $member)
     <div class="team-member large-4 columns end" style="padding:0; background-image:url('{{ URL::asset('uploads/members/user-'.$member->id.'.jpg') }}');">
        <a href="#" title="Voir la fiche de {{ $member->username }}">
            <span class="overlay"></span>
            <span class="member-name">{{ $member->username }}</span>
        </a>
     </div>
    @endforeach
</div>
@stop