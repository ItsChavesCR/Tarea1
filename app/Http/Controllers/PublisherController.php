<?php

namespace App\Http\Controllers;

class PublisherController extends Controller
{
    private $publishers = [
        1 => [
            'id' => 1,
            'name' => 'John Wiley & Sons',
            'country' => 'USA'
        ],
        2 => [
            'id' => 2,
            'name' => 'Pearson Education',
            'country' => 'UK'
        ]
    ];

    public function index()
    {
        return view('publishers.index', ['publishers' => $this->publishers]);
    }

    public function show($id)
    {
        $publisher = $this->publishers[$id];
        return view('publishers.show', compact('publisher'));
    }
}
