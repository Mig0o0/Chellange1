@if(count($customers) > 0)
    @foreach ($customers as $customer)
        <a href="{{ route('customer.edit', $customer->id) }}">{{ $customer->name }}</a> => <a href="{{ route('customer.edit', $customer->id) }}">Update</a> <br>
    @endforeach
@else
    No Customers Yet
@endif

<br>
<a href="{{ route('customer.create') }}">Add Customer</a>
