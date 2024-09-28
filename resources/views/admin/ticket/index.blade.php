@extends('admin.layouts.admin')

@section('title', 'Ticket')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Tickets Overview</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            @if (auth()->user()->user_type == 'admin')
                            <th>Response</th> <!-- New column for showing responses -->
                                <th>Actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ticket->customer->name ?? 'N/A' }}</td>
                                <td>{{ $ticket->subject }}</td>
                                <td>{{ $ticket->message }}</td>
                                <td>
                                    <span class="badge {{ $ticket->status === 'open' ? 'text-success' : 'text-danger' }}">
                                        {{ ucfirst($ticket->status) }}
                                    </span>
                                </td>
                                <td>
                                    @if ($ticket->response)
                                        {{ $ticket->response }}
                                    @else
                                        <span class="text-muted">No response yet</span>
                                    @endif
                                </td>
                                @if (auth()->user()->user_type == 'admin')
                                    <td>
                                        <!-- Action buttons -->
                                        @if ($ticket->status === 'open')
                                            <form action="{{ route('tickets.close', $ticket->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-danger btn-sm">Close</button>
                                            </form>
                                        @else
                                            <form action="{{ route('tickets.open', $ticket->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success btn-sm">Open</button>
                                            </form>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#responseModal-{{ $ticket->id }}">
                                                Respond
                                            </button>
                                        @endif

                                        <!-- Button to Open Response Modal -->

                                        <!-- Modal for ticket response -->
                                        <div class="modal fade" id="responseModal-{{ $ticket->id }}" tabindex="-1"
                                            aria-labelledby="responseModalLabel-{{ $ticket->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="responseModalLabel-{{ $ticket->id }}">
                                                            Respond to Ticket</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('tickets.respond', $ticket->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="response-{{ $ticket->id }}"
                                                                    class="form-label">Your Response</label>
                                                                <textarea class="form-control" id="response-{{ $ticket->id }}" name="response"
                                                                    rows="4" required></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Send
                                                                    Response</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
