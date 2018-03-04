@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
    <div class="col-sm-6">
<form method="POST" action="/user/{{ Auth::user()->id }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="tour"><h3>{{ $tour->title }}</h3></label>
        <input type="hidden" name="tour" class="form-control" value="{{ $tour->title }}" id="tour">
    </div>
    <div class="form-group">
        <label for="name">Traveler Name (as it/will appear on Passport) *</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" value="{{ $user->name }}" placeholder="Traveler Name" required>
    </div>
    <div class="form-group">
        <label for="birthdate">Traveler Date of Birth *</label>
        <input type="date" name="birthdate" class="form-control" id="birthdate" aria-describedby="birthdateHelp" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="passport">Traveler Passport Number</label>
        <input type="text" name="passport" class="form-control" id="passport" aria-describedby="passportHelp" value="{{ $user->passport }}" placeholder="(if available)">
    </div>
    <div class="form-group">
        <label for="guardian">Traveler Guardian and Relation</label>
        <input type="text" name="guardian" class="form-control" id="guardian" aria-describedby="guardianHelp" placeholder="(if applicable)">
    </div>
    <div class="form-group">
        <label for="phone">Traveler Phone Number</label>
        <input type="text" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="208-876-1234">
    </div>
    <div class="form-group">
        <label for="email">Email Address *</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value= "{{ $user->email }}" placeholder="name@example.com" required>
    </div>
    <div class="form-check">
        <input type="checkbox" name="terms_and_conditions" class="form-check-input" id="terms_and_conditions" required>
        <label class="form-check-label" for="terms_and_conditions">* I have read and agreed with the </label>
        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#termsAndConditions">
            Terms and Conditions
        </button>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="termsAndConditions" tabindex="-1" role="dialog" aria-labelledby="termsAndConditions" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Terms and Conditions</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        RELEASE AND WAIVER OF LIABILITY<br/><br/>
                        NOTICE TO ALL PERSONS PARTICIPATING IN TRAVEL WITH PAPILLON INTERNATIONAL EXCURSIONS, LLC:<br/><br/>
                        <p>All participants in PAPILLON INTERNATIONAL EXCURSIONS, LLC sponsored travel are required to
                            sign the Release, Waiver of Liability and Covenant Not to Sue below. Please read carefully
                            before consenting.</p>
                        <p>I acknowledge that I, as either the legal guardian of the traveler I am enrolling or as a
                            participant of legal consenting age, am solely responsible for any hospital or other costs arising
                            out of any bodily injury or property damage sustained through my participation in such voluntary travel.</p>
                        RELEASE, WAIVER OF LIABILITY AND COVENANT NOT TO SUE (Read carefully before consenting)<br/><br/>
                        <p>I hereby acknowledges that participation in any extracurricular activity involves some risk and
                            I assume all such risks.  I hereby agree that for the consideration of PAPILLON INTERNATIONAL
                            EXCURSIONS, LLC allowing me, or my minor, to participate in travel the participant does hereby
                            waive liability, release and forever discharge KELLY SCHLUP and PAPILLON INTERNATIONAL EXCURSIONS,
                            LLC, its members individually, and its ofﬁcers, agents, and employees of and from any and all
                            claims, demands, rights and causes of action of whatever kind of nature, arising out of all known
                            and unknown, foreseen and unforeseen bodily and personal injuries, damage to property and the
                            consequences thereof, including death, resulting from my voluntary participation in or in any
                            way connected with such travel.  I further covenant and agree that for the consideration stated
                            above I will not sue KELLY SCHLUP, PAPILLON INTERNATIONAL EXCURSIONS, LLC, chaperones, agents,
                            or employees for any claim for damage arising or growing out of my voluntary participation in travel.
                            I understand that the acceptance of this release, waiver of liability and covenant not to sue
                            KELLY SCHLUP, PAPILLON INTERNATIONAL EXCURSIONS, LLC, or any agent or employees thereof, shall
                            not constitute a waiver, in whole or in part, of sovereign or ofﬁcial immunity by KELLY SCHLUP,
                            PAPILLON INTERNATIONAL EXCURSIONS, LLC, or said chaperons, agents, and employees.  Further,
                            I understand that this release, waiver of liability and covenant not to sue shall be effective
                            during the time period indicated below while I am enrolled on the tour.</p>
                        <p>I further acknowledge that PAPILLON INTERNATIONAL EXCURSIONS, LLC reserves the right to refuse
                            service to anyone for reasons of safety.</p>

                        REFUNDS<br/><br/>
                        <p>PAPILLON INTERNATIONAL EXCURSIONS, LLC reserves the right to withold refunds, as they are not
                            guaranteed. Any and all refunds are fully up to the discretion of PAPILLON INTERNATIONAL
                            EXCURSIONS, LLC. It is for this reason that PAPILLON INTERNATIONAL EXCURSIONS, LLC recommends
                            every participant has travelers insurance in case of cancelation.</p>
                        ADVERTISEMENT<br/><br/>
                        <p>I further agree to allow PAPILLON INTERNATIONAL EXCURSIONS, LLC to use photos taken of me-a
                            consenting adult- or my minor on, or in relation to, my tour for promotion purposes,
                            advertisements, or any other purpose PAPILLON INTERNATIONAL EXCURSIONS, LLC may have for
                            using said photos.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col"> </div>
    </div>



@endsection
