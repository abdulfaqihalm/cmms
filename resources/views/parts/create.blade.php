@extends('layouts.app')

@section('title','| Create Part')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Add New Part</h3>
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('part.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="part-number">Part Number</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="part-number" name="part_number" placeholder="Insert part number..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="modality">Modality</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="modality" name="modality" placeholder="Insert modality..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="category">Category</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="category" name="category" placeholder="Insert category..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="block">Block</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="block" name="block" placeholder="Insert modality..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="name">Description</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="name" name="description" placeholder="Insert description..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="cost">Cost</label>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" id="cost" name="cost" placeholder="Insert cost..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="quantity">Quantity</label>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Insert quantity..." required>
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-4 justify-content-center">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-secondary btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Scripts for this page -->
@endsection
