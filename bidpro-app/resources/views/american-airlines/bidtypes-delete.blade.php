@extends("layout.master")

@section("content")
<h1 class="mt-5">American Airlines - BidTypes Delete</h1>
<p class="lead">Are you  sure you want to delete?</p>
<p class="lead">ID: {{ $bidType["id"] }}</p>
<p class="lead">Fleet: {{ $bidType["fleet"] }}</p>
<p class="lead">Seat: {{ $bidType["seat"] }}</p>
<p class="lead">Domicile: {{ $bidType["domicile"] }}</p>
<form method="POST" action="{{ route("aa.bidtypes.delete.yes") }}">
    <input type="hidden" name="hiddenId" value="{{ $bidType['id'] }}"/>
<input type="submit" class="btn btn-danger" value="YES"/>
<a href="{{ route('aa.bidtypes') }}" class="btn btn-secondary">NO</a>
{{ csrf_field() }}
</form>
@endsection