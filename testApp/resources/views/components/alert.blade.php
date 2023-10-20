    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    {{-- <div class="bg-red-500 text-sm text-with rounded-md p-4" role="alert"> --}}
        {{-- <span class="font-bold">Danger </span> alert! fhkjagfhagfagfgsahf</span>     --}}
{{-- </div> --}}

@php $color = 'blue'; @endphp

@if($type == 'info')
    @php $color = 'blue'; @endphp
@elseif($type =='danger')
    @php $color = 'red'; @endphp
@elseif($type =='warning')
    @php $color = 'orange'; @endphp
@elseif($type =='success')
    @php $color = 'green'; @endphp
@elseif($type =='secondary')
    @php $color = 'gray'; @endphp
@endif

<div {{ $attributes->merge(['class' => 'bg-'.$color.'-500 text-sm text-with rounded-md p-4']) }} role="alert">
    {{ $message }}
</div>




