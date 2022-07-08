@php use App\Http\Controllers\CalculatorController; @endphp
<div class="col-md-2">
    <form action="" method="POST">
        <div class="form-group col-md-12">
            <label for="content">{{$name}}</label>
            <input
                @if (isset($result))
                    style="background-color:{{CalculatorController::getColorBasedOnValue((float)$value, isset($boss))}} !important; color:white"
                @endif
                class="form-control" type="text" name="value" value="{{$value}}" id="{{$id}}" {{$active ?? 'readonly'}} >
                @if (isset($result))
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Speciality</label>
                    </div>
                    @if(isset($crit))
                        <div class="col-md-6">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Leather Buff</label>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    @if(isset($crit))
                        <div class="col-md-6 text-left">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">x2</label>
                        </div>
                    @endif
                </div>
                @endif
        </div>
    </form>
</div>
