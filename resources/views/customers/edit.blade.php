<form method="post" action="{{ route('customer.update', $customer->id) }}">
    @csrf
    @method('put')

    <label>
        Name
        <input type="text" name="name" placeholder="name" value="{{ $customer->name }}">
    </label>
    <br>
    <label>
        Email
        <input type="text" name="email" placeholder="email" value="{{ $customer->email }}">
    </label>
    <br>
    <label>
        Phone
        <input type="text" name="phone" placeholder="phone" value="{{ $customer->phone }}">
    </label>
    <br>
    <button>Update</button>
</form>
