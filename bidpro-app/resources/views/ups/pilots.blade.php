@extends('layout.master')

@section('content')
@php($errorsFound = count($errors->all()))


    <h1 class="text-center">Simple Math Calculator</h1>
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
    
    <section class="row d-inline">
        <div class="col ">
            
            <form class="text-center" method="POST" action="{{ route('u.pilots-post') }}">
               
                {{-- <form class="text-center" method="POST" action="{{ route('ups.pilots') }}"> --}}


                    <div class="form-group d-inline-block mw-1">
                        <label for="firstNumInput"> </label>
                        <input type="text" class="form-control" id="firstNumInput" name="firstNumInput"
                            placeholder="First Number"
                            value="{{ Session::has('firstNumber') ? Session::get('firstNumber') : old('firstNumInput') }}" />
                    </div>







                    <div class=" d-inline-block">
                        <select class="form-control custom-select" name="operator" value="{{ Session::get('operator') }}">
                            <option value="+" id="plus" name="plus" {{ Session::get('operator') == '+' ? 'selected' : '' }}>
                                Addition (+)</option>
                            <option value="-" id="minus" name="minus"
                                {{ Session::get('operator') == '-' ? 'selected' : '' }}>Subtraction (-)</option>
                            <option value="*" id="times" name="times"
                                {{ Session::get('operator') == '*' ? 'selected' : '' }}>Multiplication (*)</option>
                            <option value="/" id="divide" name="divide"
                                {{ Session::get('operator') == '/' ? 'selected' : '' }}>Division (/)</option>
                        </select>


                    </div>
                    <div class="form-group d-inline-block ">
                        <label for="secondNumInput"> </label>
                        <input type="text" class="form-control" id="secondNumInput" name="secondNumInput"
                            placeholder="Second Number"
                            value="{{ Session::has('secondNumber') ? Session::get('secondNumber') : old('secondNumInput') }}" />
                    </div>




                    <div class="form-group text-center ">
                        <input type="submit" class="btn btn-primary" value="Calculate" />
                        <a href="{{ Session::get('math-app') }}" class="btn btn-danger">Clear</a>


                    </div>

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
