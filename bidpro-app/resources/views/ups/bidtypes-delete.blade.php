@extends("layout.master")

@section('content')
    <h1 class="mt-5">Delete Calculation</h1>
    <p class="lead">Are you sure you want to delete?</p>
    <p class="lead">ID: {{ $calc['id'] }}</p>
    <p class="lead">First Number: {{ $calc['firstNumber'] }}</p>
    <p class="lead">Operator: {{ $calc['operator'] }}</p>
    <p class="lead">Second Number: {{ $calc['secondNumber'] }}</p>
    <form method="POST" action="{{ route('u.bidtypes.delete.yes') }}">
        <input type="hidden" name="hiddenId" value="{{ $calc['id'] }}" />
        <input type="submit" class="btn btn-danger" value="YES" />
        <a href="{{ route('u.bidtypes') }}" class="btn btn-secondary">NO</a>
        {{ csrf_field() }}

    </form>
@endsection
