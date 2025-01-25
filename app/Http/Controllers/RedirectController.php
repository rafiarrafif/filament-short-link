<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index(string $linkParams) {
        $longLink = Link::where('short_link', $linkParams)->first();
        $redirectDestination = $longLink->long_link;
        return redirect()->away($redirectDestination);
    }
}