<?php

namespace App\Http\Livewire\Dashboard\Pengguna;

use App\Models\Antrian;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPengguna extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $user_id, $name, $email, $role_id, $password,$password_confirmation, $data, $search;
    protected $queryString = ['search'];

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'role_id' => 'required',
        'password' => 'required|min:8|confirmed'
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function mount()
    {
        $this->data = User::all();
    }

    public function editPengguna($user_id)
    {
        $user = User::find($user_id);
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role_id = $user->role_id;
    }

    public function updatePengguna()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
            'role_id' => 'required'
        ]);

        user::where('id', $this->user_id)->update($validatedData);
        session()->flash('message', 'Data Pengguna Berhasil Diubah');
        $this->emit('update');
        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
    }

    public function save()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->role_id,
            'password' => Hash::make($this->password)
        ]);

        session()->flash('message', 'Data Pengguna Berhasil Ditambahkan');
        $this->emit('update');
        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
    }
    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->role_id = '';
        $this->password = '';
        $this->password_confirmation = '';
    }

    public function close_modal()
    {
        $this->resetInput();
    }

    public function deletePengguna($user_id)
    {
        $this->user_id = $user_id;
    }

    public function destroy()
    {
        User::find($this->user_id)->delete();
        session()->flash('message', 'Data Pengguna Berhasil Dihapus');
        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
    }

    public function render()
    {

        if($this->role_id){
            $users = User::where('role_id', $this->role_id)->paginate(10);
        }else if($this->search){
            $users = User::where('name', 'like', '%'.$this->search.'%')->paginate(10);
        }else {
            $users = User::paginate(10);
        }
        // $users = User::where('name', 'like', '%'.$this->search.'%')->paginate(10);

        return view('livewire.dashboard.pengguna.show-pengguna', compact('users'));
    }

}
