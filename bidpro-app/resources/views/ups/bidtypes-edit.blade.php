@extends('layout.master')

@section('content')
@php($errorsFound = count($errors->all()))
<h1 class="text-center">Edit Math Calclation</h1>
@if ($errorsFound)
            
       
<section class="alert alert-danger">
        <ul> 
            
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
           
            @endforeach
            Error! Enter a valid equation.
        </ul>
</section>
@endif


<section class="row d-inline ">
    <div class="col "> 
           
    <form class="text-center" method="POST" action="{{ route("u.bidtypes.edit.run") }}">

 
        <div class="form-group d-inline-block mw-1">
            <label for="firstNumInput"> </label>
            <input type="text"
                    class="form-control"
                    id="firstNumInput"
                    name="firstNumInput"
                    placeholder="First Number" 
                    value="{{ $calc['firstNumber']}}"/>
        </div>
        
       
    

  


<div class=" d-inline-block">
        <select class="form-control custom-select" name="operator" value="{{ $calc['operator']}}">
                <option value="+" id="plus" name="plus" {{ $calc['operator'] == '+' ? 'selected' : '' }}>Addition (+)</option>
                <option value="-" id="minus" name="minus" {{ $calc['operator'] == '-' ? 'selected' : '' }}>Subtraction (-)</option>
                <option value="*" id="times" name="times" {{ $calc['operator'] == '*' ? 'selected' : '' }}>Multiplication (*)</option>
                <option value="/" id="divide" name="divide" {{  $calc['operator']  == '/' ? 'selected' : '' }}>Division (/)</option>
            </select>
            
            
</div>
        <div class="form-group d-inline-block ">
                <label for="secondNumInput"> </label>
                <input type="text"
                        class="form-control"
                        id="secondNumInput"
                        name="secondNumInput"
                        placeholder="Second Number" 
                        value="{{ $calc['secondNumber'] }}"/>
            </div>


            

        <div class="form-group text-center ">
            <input type="submit" class="btn btn-primary" value="Run"/>
            <a href="{{ route('u.bidtypes') }}" class="btn btn-primary">Back</a>

            
        </div>
        <input type="hidden" name="hiddenId" value="{{ $calc['id'] }}" />
        {{ csrf_field() }}

    </form>
    </div>

</section>


    <?php
    $num1 = Session::get('firstNumber');
    $plus = ' + ';
    $minus = ' - ';
    $times = ' * ';
    $divide = ' / ';
    $num2 = Session::get('secondNumber');

    $equalsP = $num1 . $plus . $num2;
    $equalsM = $num1 . $minus . $num2;
    $equalsT = $num1 . $times . $num2;
    $equalsD = $num1 . $divide . $num2;

    // $equalsDReal = Session::get('firstNumber') / Session::get('secondNumber');
    ?>




   
        @if (Session::get('operator') == '+')







            <div class="mx-auto jumbotron jumbotron-fluid w-75" style="background-color: #eaecef; ">






                <div class="container">
                    <p class="text-center display-2"> <?php echo Session::get('firstNumber') +
                        Session::get('secondNumber'); ?></p>
                    <p class="text-center display-4"> The answer to <?php echo "$equalsP \n"; ?></p>
                </div>


            </div>



        @endif

        @if (Session::get('operator') == '-')







            <div class="mx-auto jumbotron jumbotron-fluid w-75" style="background-color: #eaecef; ">






                <div class="container">
                    <p class="text-center display-2"> <?php echo Session::get('firstNumber') -
                        Session::get('secondNumber'); ?></p>
                    <p class="text-center display-4"> The answer to <?php echo "$equalsM \n"; ?></p>
                </div>


            </div>



        @endif
        @if (Session::get('operator') == '*')







            <div class="mx-auto jumbotron jumbotron-fluid w-75" style="background-color: #eaecef; ">






                <div class="container">
                    <p class="text-center display-2"> <?php echo Session::get('firstNumber') *
                        Session::get('secondNumber'); ?></p>
                    <p class="text-center display-4"> The answer to <?php echo "$equalsT \n"; ?></p>
                </div>


            </div>



        @endif

        @if (Session::get('operator') == '/')







            <div class="mx-auto jumbotron jumbotron-fluid w-75" style="background-color: #eaecef; ">






                <div class="container">
                    <p class="text-center display-2"> <?php echo Session::get('firstNumber') /
                        Session::get('secondNumber'); ?></p>
                    <p class="text-center display-4"> The answer to <?php echo "$equalsD \n"; ?></p>
                </div>


            </div>

        @endif
@endsection