<div class="nk-tb-item nk-tb-head">
    <div class="nk-tb-col nk-tb-orders-type"><span>Sticker Type</span></div>
    <div class="nk-tb-col"><span>Driver's Name</span></div>
    <div class="nk-tb-col tb-col-sm"><span>Date</span></div>
    <div class="nk-tb-col tb-col-xl"><span>Time</span></div>
    <div class="nk-tb-col tb-col-xl"><span>Reg. Num.</span></div>
    <div class="nk-tb-col tb-col-sm text-right"><span>Form Num.</span></div>
    <div class="nk-tb-col text-right"><span>Action</span></div>
</div><!-- .nk-tb-item -->

@foreach($vehicles as $vehicle)
    @if(!is_null($vehicle) && is_object($vehicle) && !is_null($vehicle->driver()) && is_object($vehicle->driver()) && !is_null($vehicle->owner()) && is_object($vehicle->owner()) && !is_null($vehicle->guarantor()) && is_object($vehicle->guarantor()))
    <div class="nk-tb-item">
        <div class="nk-tb-col nk-tb-orders-type">
            <span class="text-dark">{{ $vehicle->sticker_type }}</span>
        </div>
        <div class="nk-tb-col">
            <span class="tb-lead">{{ $vehicle->driver()->first_name }} {{ $vehicle->driver()->last_name }} </span>
        </div>
        <div class="nk-tb-col tb-col-sm">
            <span class="lal">{{ $vehicle->renDate() }}</span>
        </div>
        <div class="nk-tb-col tb-col-xl">
            <span class="lal">{{ $vehicle->created_at->toDateTimeString() }}</span>
        </div>
        <div class="nk-tb-col tb-col-xl">
            <span class="lal text-primary">{{ $vehicle->reg_num }}</span>
        </div>
        <div class="nk-tb-col tb-col-sm text-right">
            <span class="lal tb-amount">{{ $vehicle->form_num }}</span>
        </div>
        <div class="nk-tb-col text-right">
            <span class="tb-sub tb-amount "><a href="{{ route('frontend.search.reg').'?reg_num='.$vehicle->reg_num }}" class="btn btn-primary">View</a> @include('includes.partials.record-delete-form')</span>
        </div>
    </div><!-- .nk-tb-item -->
    @else
        <div class="nk-tb-item">
            <div class="nk-tb-col nk-tb-orders-type">
                <span class="text-dark">{{ $vehicle->sticker_type }}</span>
            </div>
            <div class="nk-tb-col">
                <span class="tb-lead text-danger">Incomplete Registration, please delete this record</span>
            </div>
            <div class="nk-tb-col tb-col-sm">
                <span class="lal">{{ $vehicle->renDate() ?? 'unavailable'  }}</span>
            </div>
            <div class="nk-tb-col tb-col-xl">
                <span class="lal">{{ $vehicle->created_at->toDateTimeString() ?? 'unavailable'  }}</span>
            </div>
            <div class="nk-tb-col tb-col-xl">
                <span class="lal text-primary">{{ $vehicle->reg_num ?? 'unavailable' }}</span>
            </div>
            <div class="nk-tb-col tb-col-sm text-right">
                <span class="lal tb-amount">{{ $vehicle->form_num ?? 'unavailable'  }}</span>
            </div>
            <div class="nk-tb-col text-right">
                <span class="tb-sub tb-amount ">
                   @include('includes.partials.record-delete-form')
                </span>
            </div>
        </div><!-- .nk-tb-item -->
    @endif
@endforeach
