<form method="post" action="{{ route('customer.store') }}">
    @csrf
    <label>
        Name
        <input type="text" name="name" placeholder="name">
    </label>
    <br>
    <label>
        Email
        <input type="text" name="email" placeholder="email">
    </label>
    <br>
    <label>
        Phone
        <input type="text" name="phone" placeholder="phone">
    </label>
    <br>
    <button>Submit</button>
</form>
