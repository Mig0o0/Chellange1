<h1>{{ $customer->name }}</h1><br>
<h1>{{ $customer->email }}</h1><br>
<h1>{{ $customer->phone }}</h1><br>
<form action="{{ route('customer.destroy', $customer->id) }}" method="post">
    @method('delete')
    @csrf
    <button>Delete</button>
</form>
