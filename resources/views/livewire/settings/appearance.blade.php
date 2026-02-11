<section class="">
    @include('partials.settings-heading')

    <h2 class="sr-only">{{ __('Appearance Settings') }}</h2>

    <x-settings.layout :heading="__('Appearance')" :subheading=" __('Update the appearance settings for your account')">
        <div class="space-y-4 mt-4">
            <div class="flex flex-wrap gap-3" x-data x-model="$flux.appearance">
                <label class="cursor-pointer">
                    <input type="radio" name="appearance" value="light" class="hidden peer"
                        onclick="$flux.appearance = 'light'" :checked="$flux.appearance === 'light'" />
                    <div
                        class="flex items-center gap-2.5 px-5 py-3 rounded-xl border-2 border-slate-200 peer-checked:border-primary peer-checked:bg-primary/5 transition-all duration-200 hover:border-slate-300">
                        <span class="icon-[tabler--sun] size-5 text-amber-500"></span>
                        <span class="text-sm font-medium text-slate-700">{{ __('Light') }}</span>
                    </div>
                </label>
                <label class="cursor-pointer">
                    <input type="radio" name="appearance" value="dark" class="hidden peer"
                        onclick="$flux.appearance = 'dark'" :checked="$flux.appearance === 'dark'" />
                    <div
                        class="flex items-center gap-2.5 px-5 py-3 rounded-xl border-2 border-slate-200 peer-checked:border-primary peer-checked:bg-primary/5 transition-all duration-200 hover:border-slate-300">
                        <span class="icon-[tabler--moon] size-5 text-indigo-500"></span>
                        <span class="text-sm font-medium text-slate-700">{{ __('Dark') }}</span>
                    </div>
                </label>
                <label class="cursor-pointer">
                    <input type="radio" name="appearance" value="system" class="hidden peer"
                        onclick="$flux.appearance = 'system'" :checked="$flux.appearance === 'system'" />
                    <div
                        class="flex items-center gap-2.5 px-5 py-3 rounded-xl border-2 border-slate-200 peer-checked:border-primary peer-checked:bg-primary/5 transition-all duration-200 hover:border-slate-300">
                        <span class="icon-[tabler--device-desktop] size-5 text-slate-500"></span>
                        <span class="text-sm font-medium text-slate-700">{{ __('System') }}</span>
                    </div>
                </label>
            </div>
        </div>
    </x-settings.layout>
</section>