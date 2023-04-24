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
            </div>
            <form action="#" id="stepForm">
                <div role="tab-list">
                    <div role="tabpanel" id="color" class="tabpanel">
                        <h3>What is your favorite color?</h3>
                        <textarea name="color" class="form-input" placeholder="Ruby red"></textarea>
                    </div>
                    <div role="tabpanel" id="hobbies" class="tabpanel hidden">
                        <h3>What are your hobbies?</h3>
                        <textarea name="hobbies" class="form-input" placeholder="Mountain climbing, Guitar, Skateboarding"></textarea>
                    </div>
                    <div role="tabpanel" id="occupation" class="tabpanel hidden">
                        <h3>What is your occupation?</h3>
                        <textarea name="occupation" class="form-input" placeholder="Web Designer"></textarea>
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
