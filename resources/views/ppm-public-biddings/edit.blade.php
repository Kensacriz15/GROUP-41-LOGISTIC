@extends('layouts/layoutMaster')

@section('content')
    <h1>Edit Public Bidding</h1>

    <form action="{{ route('ppm-public-biddings.update', $publicBidding->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="bid_document">Bid Document</label>
            <input type="text" name="bid_document" id="bid_document" class="form-control" value="{{ $publicBidding->bid_document }}" required>
        </div>

        <div class="form-group">
            <label for="bid_start">Bid Start</label>
            <input type="datetime-local" name="bid_start" id="bid_start" class="form-control" value="{{ $publicBidding->bid_start }}" required>
        </div>

        <div class="form-group">
            <label for="bid_end">Bid End</label>
            <input type="datetime-local" name="bid_end" id="bid_end" class="form-control" value="{{ $publicBidding->bid_end }}" required>
        </div>

        <div class="form-group">
            <label for="bid_status">Bid Status</label>
            <select name="bid_status" id="bid_status" class="form-control" required>
                <option value="open" {{ $publicBidding->bid_status == 'open' ? 'selected' : '' }}>Open</option>
                <option value="closed" {{ $publicBidding->bid_status == 'closed' ? 'selected' : '' }}>Closed</option>
                <option value="cancelled" {{ $publicBidding->bid_status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
