<x-guest-layout>
    <div class="text-center mb-4">
        <img src="{{ asset('logo/medicall-logo-min.png') }}" alt="Logo" class="h-8">
    </div>
    <div class="container">
        <div class="card col-md-6 mx-auto p-4">
            <div class="card-body  ">


                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input id="name" class="form-control" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required autocomplete="username" />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" class="form-control" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password_confirmation" class="form-control" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="terms" id="terms"
                                    required />
                                <label class="form-check-label" for="terms">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a href="' . route('terms.show') . '" target="_blank">' . __('Terms of Service') . '</a>',
                                        'privacy_policy' => '<a href="' . route('policy.show') . '" target="_blank">' . __('Privacy Policy') . '</a>',
                                    ]) !!}
                                </label>
                            </div>
                        </div>
                    @endif

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('login') }}"
                            class="text-muted text-decoration-none me-4">{{ __('Already registered?') }}</a>
                        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-guest-layout>
