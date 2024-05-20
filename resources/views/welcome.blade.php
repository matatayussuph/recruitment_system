@extends('layouts.login_master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            <!-- Search input -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search for jobs" aria-label="Search for jobs" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Search</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <!-- Filter links -->
            <div class="btn-group" role="group" aria-label="Filter Links" >
                <button type="button" class="btn btn-secondary filter-link" data-filter="category" style="margin: 2px;">Location</button>
                <button type="button" class="btn btn-secondary filter-link" data-filter="title" style="margin: 2px;">Title</button>
                <button type="button" class="btn btn-secondary filter-link" data-filter="category" style="margin: 2px;">Company</button>
                <button type="button" class="btn btn-secondary filter-link" data-filter="title" style="margin: 2px;">Date Posted</button>
               
            </div>
            <div id="filterDetailsContainer" class="mt-3">
            </div>
        </div>
    </div>
    <div class="col-md-6">
            <!-- Placeholder for job details -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Job Title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Company Name</h6>
                    <p class="card-text">Location</p>
                    <p class="card-text">Job Description</p>
                    <a href="#" class="btn btn-primary">Apply</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#jobListingsTable').DataTable({
            // DataTable configuration options
        });

        // Handle filter link click
        $('.filter-link').on('click', function() {
            var filter = $(this).data('filter');
            fetchFilterDetails(filter);
        });

        // Function to fetch filter details from server
        function fetchFilterDetails(filter) {
            // Replace this with your actual AJAX call to fetch filter details from the server
            // For demonstration, I'm just showing a mock data
            var filterDetails = [];
            if (filter === 'category') {
                filterDetails = ['All', 'Management', 'IT', 'Administrator'];
            } else if (filter === 'title') {
                filterDetails = ['All', 'Software Engineer', 'Project Manager', 'Marketing Specialist'];
            }
            displayFilterDetails(filterDetails);
        }

        // Function to display filter details
        function displayFilterDetails(filterDetails) {
            var filterDetailsContainer = $('#filterDetailsContainer');
            filterDetailsContainer.empty(); // Clear previous filter details
            if (filterDetails.length > 0) {
                var filterDetailsList = $('<ul class="list-group"></ul>');
                filterDetails.forEach(function(detail) {
                    filterDetailsList.append('<li class="list-group-item">' + detail + '</li>');
                });
                filterDetailsContainer.append(filterDetailsList);
            } else {
                filterDetailsContainer.html('<p>No filter details available.</p>');
            }
        }
    });
</script>
@endpush
