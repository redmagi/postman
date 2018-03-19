<?php

namespace App\Http\Controllers;

use App\HouseOwner;
use Illuminate\Http\Request;

class HouseOwnerController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\HouseOwner  $houseOwner
	 * @return \Illuminate\Http\Response
	 */
	public function show(HouseOwner $houseOwner) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\HouseOwner  $houseOwner
	 * @return \Illuminate\Http\Response
	 */
	public function edit(HouseOwner $houseOwner) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\HouseOwner  $houseOwner
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, HouseOwner $houseOwner) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\HouseOwner  $houseOwner
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(HouseOwner $houseOwner) {
		//
	}

	/*
		    get owner list
	*/
	public function getList(HouseOwner $houseOwner, $house_id) {
		$datas = \DB::table('house_owner AS ho')
			->select([
				'p.people_id',
				\DB::raw("CONCAT(title, name, ' ', surname) AS name"),
			])
			->leftJoin('peoples AS p', 'ho.people_id', '=', 'p.people_id')
			->where('ho.house_id', $house_id)
			->orderBy('title', 'ASC')
			->orderBy('name', 'ASC')
			->orderBy('surname', 'ASC')
			->get();
		return response()->json($datas);
	}
}
