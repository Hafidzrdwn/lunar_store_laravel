<?php

namespace App\Livewire\Client\Profile;

use Laravolt\Avatar\Avatar;
use Livewire\Component;
use Livewire\WithFileUploads;

class PersonalInfo extends Component
{
    use WithFileUploads;

    public $user;
    public $username;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $avatar;
    public $imagePreview;

    public function mount($user)
    {
        $this->user = $user;
        $this->username = $user['username'];
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->phone = $user['phone'];
        $this->address = $user['address'];
        $this->avatar = null;
        $this->imagePreview = $user['avatar'] ?? null;
    }

    public function updatedAvatar()
    {
        $this->validate([
            'avatar' => 'image|max:2048', // 2MB Max
        ]);

        $this->imagePreview = $this->avatar->temporaryUrl();
    }

    public function save()
    {
        dd([
            'username' => $this->username,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'avatar' => $this->avatar
        ]);
    }

    public function cancelSave()
    {
        $this->name = ($this->user['name'] ?? '');
        $this->phone = ($this->user['phone'] ?? '');
        $this->address = ($this->user['address'] ?? '');
        $this->avatar = null;
        $this->imagePreview = ($this->user['avatar'] ?? null);
    }

    public function render()
    {
        return view('livewire.client.profile.personal-info');
    }
}
