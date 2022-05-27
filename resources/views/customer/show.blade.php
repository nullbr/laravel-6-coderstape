<h1>Customer Details</h1>

<strong>Name</strong>
<p>{{ $customer->name }}</p>

<strong>Email</strong>
<p>{{ $customer->email }}</p>

<br>
<div>
    <a href="/customers/{{ $customer->id }}/edit">Edit Customer</a>

    <form action="/customers/{{ $customer->id }}" method="post">
        @method('DELETE')
        @csrf

        <button>Delete</button>
    </form>
</div>

<div><a href="/customers">< Back</a></div>

