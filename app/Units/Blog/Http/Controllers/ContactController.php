<?php

namespace App\Units\Blog\Http\Controllers;

use App\Domains\Contact\Repositories\ContactRepository;
use App\Support\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @var ContactRepository
     */
    private $contactRepository;

    /**
     * ContactController constructor.
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        return $this->view('blog::contact.index');
    }

    public function send(Request $request)
    {
        if ($this->contactRepository->create($request->all())) {
            return redirect()->route('blog.contact.index');
        }
    }
}