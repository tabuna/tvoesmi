@foreach($exchange as $currency)
    <span class="p-2 text-md-white" title="{{ $currency['name'] }} {{ $format($difference($currency)) }}">
            <span class="text-muted">{{ $currency['charCode'] }}:</span>

            {{ $format($currency['value']) }}

            <small class="align-top {{ $isPositiveDynamics($currency) ? ' text-success' : 'text-danger' }}">
                {!!   $isPositiveDynamics($currency) ? '&#8593;' : '&#8595;' !!}
            </small>
    </span>
@endforeach
