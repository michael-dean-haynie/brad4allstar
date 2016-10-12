<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
	private function preparePageData($activeNav){
		return ["activeNav" => $activeNav];
	}

    public function home(){
    	$pageData = $this->preparePageData('home');
    	return view('pages.home', $pageData);
    }

    public function qualifications(){
    	$pageData = $this->preparePageData('qualifications');
    	return view('pages.qualifications', $pageData);
    }

    public function pseudonymes(){
    	$pageData = $this->preparePageData('pseudonymes');
    	return view('pages.pseudonymes', $pageData);
    }


	public function trivia(){
    	$pageData = $this->preparePageData('trivia');
    	return view('pages.trivia', $pageData);
    }


	public function whatvotingmeans(){
    	$pageData = $this->preparePageData('whatvotingmeans');
    	return view('pages.whatvotingmeans', $pageData);
    }

    public function howtovote(){
    	$pageData = $this->preparePageData('howtovote');
    	return view('pages.howtovote', $pageData);
    }

}
