@extends('layouts.index')
@section('title', 'PROJECT - Individual')
@push('styles')
    @include('layouts.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/steper.css') }}" />
@endpush
@section('content')


    <div class="container top">
        <div class="container_form" id="containerForm">
            <div class="tab-status">
                <span class="tab active">1</span>
                <span class="tab">2</span>
                <span class="tab">3</span>
                <span class="tab">4</span>
                <span class="tab">5</span>
                <span class="tab">6</span>
                <span class="tab">7</span>
                <span class="tab">8</span>





            </div>
            <form action="#" id="stepForm">
                <div role="tab-list">
                    <div role="tabpanel" id="gender" class="tabpanel">
                        <h3>what is your gender identity?</h3>
                        {{-- <textarea name="color" class="form-input" placeholder="Ruby red"></textarea> --}}

                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="male" name="male" value="Male" style="width: 20px" checked>
                            <label class="form-check-label" for="radio1">Male</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="female" name="female" value="Female" style="width: 20px">
                            <label class="form-check-label" for="radio2">Female</label>
                            </div>


                    </div>
                    <div role="tabpanel" id="old" class="tabpanel hidden">
                        <h3>How old are you?</h3>
                        <input name="old" class="form-input" placeholder="25 Years"/>
                    </div>
                    <div role="tabpanel" id="identity" class="tabpanel hidden">
                        <h3>How do you identity?</h3>
                        {{-- <textarea name="occupation" class="form-input" placeholder="Web Designer"></textarea> --}}
                        <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="straight" name="straight" value="straight" style="width: 20px" checked>
                            <label class="form-check-label" for="radio1">Straight</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="gay" name="gay" value="gay" style="width: 20px">
                            <label class="form-check-label" for="radio2">Gay</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="lesbian" name="lesbian" value="lesbian" style="width: 20px">
                            <label class="form-check-label" for="radio1">Lesbian</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="not" name="not" value="not" style="width: 20px">
                            <label class="form-check-label" for="radio2">Perfect not to say</label>
                            </div>
                    </div>

                    <div role="tabpanel" id="relationship" class="tabpanel hidden">
                        <h3>What is your relationship status?</h3>
                        {{-- <textarea name="occupation" class="form-input" placeholder="Web Designer"></textarea> --}}
                        <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="single" name="single" value="single" style="width: 20px" checked>
                            <label class="form-check-label" for="radio1">Single</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="relationship" name="relationship" value="relationship" style="width: 20px">
                            <label class="form-check-label" for="radio2">In a relationship</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="married" name="married" value="married" style="width: 20px">
                            <label class="form-check-label" for="radio1">Married</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="divorced" name="divorced" value="divorced" style="width: 20px">
                            <label class="form-check-label" for="radio2">Divorced</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="widowed" name="widowed" value="widowed" style="width: 20px">
                            <label class="form-check-label" for="radio2">Widowed</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="other" name="other" value="other" style="width: 20px">
                            <label class="form-check-label" for="radio2">Other</label>
                            </div>
                    </div>

                    <div role="tabpanel" id="old" class="tabpanel hidden">
                        <h3>Do you consider yourself to be religious?</h3>
                        <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="yes" name="yes" value="yes" style="width: 20px" checked>
                            <label class="form-check-label" for="radio1">Yes</label>
                            </div>

                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="no" name="no" value="no" style="width: 20px">
                            <label class="form-check-label" for="radio2">No</label>
                            </div>
                    </div>
                     <div role="tabpanel" id="old" class="tabpanel hidden">
                        <h3>which religion do you belong to?</h3>
                        <div class="form-check">
                        <input type="radio" class="form-check-input form-input" id="buddhist" name="buddhist" value="buddhist" style="width: 20px" checked>
                        <label class="form-check-label" for="radio2">Buddhist</label>
                        </div>
                        <div class="form-check">
                        <input type="radio" class="form-check-input form-input" id="christianity" name="christianity" value="christianity" style="width: 20px">
                        <label class="form-check-label" for="radio2">Christianity</label>
                        </div>
                        <div class="form-check">
                        <input type="radio" class="form-check-input form-input" id="islam" name="islam" value="islam" style="width: 20px">
                        <label class="form-check-label" for="radio2">Islam</label>
                        </div>
                        <div class="form-check">
                        <input type="radio" class="form-check-input form-input" id="other" name="other" value="other" style="width: 20px">
                        <label class="form-check-label" for="radio2">Other</label>
                        </div>
                    </div>

                    <div role="tabpanel" id="old" class="tabpanel hidden">
                        <h3>Do you consider yourself to be spiritual?</h3>
                        <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="yes" name="yes" value="yes" style="width: 20px" checked>
                            <label class="form-check-label" for="radio2">Yes</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="no" name="no" value="no" style="width: 20px">
                            <label class="form-check-label" for="radio2">No</label>
                            </div>
                    </div>

                    <div role="tabpanel" id="old" class="tabpanel hidden">
                        <h3>Have you ever been in therapy before?</h3>
                        <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="yes" name="yes" value="yes" style="width: 20px" checked>
                            <label class="form-check-label" for="radio2">Yes</label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input form-input" id="no" name="no" value="no" style="width: 20px">
                            <label class="form-check-label" for="radio2">No</label>
                            </div>
                    </div>
                </div>
                <div class="pagination">
                    <a class="btn hidden" id="prev">Previous</a>
                    <a class="btn" id="next">Continue</a>
                    <button class="btn btn-submit hidden" id="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@push('scripts')
    @include('layouts.foot')

    <script>
        const previousButton = document.querySelector('#prev')
        const nextButton = document.querySelector('#next')
        const submitButton = document.querySelector('#submit')
        const tabTargets = document.querySelectorAll('.tab')
        const tabPanels = document.querySelectorAll('.tabpanel')
        const isEmpty = (str) => !str.trim().length
        let currentStep = 0

        // Validate first input on load
        validateEntry()

        // Next: Change UI relative to current step and account for button permissions
        nextButton.addEventListener('click', (event) => {
            event.preventDefault()

            // Hide current tab
            tabPanels[currentStep].classList.add('hidden')
            tabTargets[currentStep].classList.remove('active')

            // Show next tab
            tabPanels[currentStep + 1].classList.remove('hidden')
            tabTargets[currentStep + 1].classList.add('active')
            currentStep += 1

            validateEntry()
            updateStatusDisplay()
        })

        // Previous: Change UI relative to current step and account for button permissions
        previousButton.addEventListener('click', (event) => {
            event.preventDefault()

            // Hide current tab
            tabPanels[currentStep].classList.add('hidden')
            tabTargets[currentStep].classList.remove('active')

            // Show previous tab
            tabPanels[currentStep - 1].classList.remove('hidden')
            tabTargets[currentStep - 1].classList.add('active')
            currentStep -= 1

            nextButton.removeAttribute('disabled')
            updateStatusDisplay()
        })


        function updateStatusDisplay() {
            // If on the last step, hide the next button and show submit
            if (currentStep === tabTargets.length - 1) {
                nextButton.classList.add('hidden')
                previousButton.classList.remove('hidden')
                submitButton.classList.remove('hidden')
                validateEntry()

                // If it's the first step hide the previous button
            } else if (currentStep == 0) {
                nextButton.classList.remove('hidden')
                previousButton.classList.add('hidden')
                submitButton.classList.add('hidden')
                // In all other instances display both buttons
            } else {
                nextButton.classList.remove('hidden')
                previousButton.classList.remove('hidden')
                submitButton.classList.add('hidden')
            }
        }

        function validateEntry() {
            let input = tabPanels[currentStep].querySelector('.form-input')

            // Start but disabling continue button
            nextButton.setAttribute('disabled', true)
            submitButton.setAttribute('disabled', true)

            // Validate on initial function fire
            setButtonPermissions(input)

            // Validate on input
            input.addEventListener('input', () => setButtonPermissions(input))
            // Validate if bluring from input
            input.addEventListener('blur', () => setButtonPermissions(input))
        }

        function setButtonPermissions(input) {
            if (isEmpty(input.value)) {
                nextButton.setAttribute('disabled', true)
                submitButton.setAttribute('disabled', true)
            } else {
                nextButton.removeAttribute('disabled')
                submitButton.removeAttribute('disabled')
            }
        }
    </script>
@endpush
