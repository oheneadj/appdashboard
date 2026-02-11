<section class="">
    @include('partials.settings-heading')

    <h2 class="sr-only">{{ __('Appearance Settings') }}</h2>

    <x-settings.layout :heading="__('Appearance')" :subheading=" __('Update the appearance settings for your account')">
        <div class="space-y-4 mt-4">
            <div class="flex flex-wrap gap-3" x-data="{
                theme: localStorage.getItem('theme') || 'system',
                updateTheme(val) {
                    this.theme = val;
                    localStorage.setItem('theme', val);
                    
                    if (val === 'dark' || (val === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                        document.documentElement.classList.add('dark');
                        document.documentElement.setAttribute('data-theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        document.documentElement.setAttribute('data-theme', 'light');
                    }
                    
                    if (val === 'system') {
                        localStorage.removeItem('theme');
                    }
                }
            }" x-init="$watch('theme', value => updateTheme(value))">
                <label class="cursor-pointer">
                    <input type="radio" name="appearance" value="light" class="hidden peer" x-model="theme" />
                    <div
                        class="flex items-center gap-2.5 px-5 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 dark:border-slate-700 peer-checked:border-primary peer-checked:bg-primary/5 transition-all duration-200 hover:border-slate-300 dark:hover:border-slate-600">
                        <span class="icon-[tabler--sun] size-5 text-amber-500"></span>
                        <span class="text-sm font-medium text-slate-700 dark:text-slate-200 dark:text-slate-200">{{ __('Light') }}</span>
                    </div>
                </label>
                <label class="cursor-pointer">
                    <input type="radio" name="appearance" value="dark" class="hidden peer" x-model="theme" />
                    <div
                        class="flex items-center gap-2.5 px-5 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 dark:border-slate-700 peer-checked:border-primary peer-checked:bg-primary/5 transition-all duration-200 hover:border-slate-300 dark:hover:border-slate-600">
                        <span class="icon-[tabler--moon] size-5 text-indigo-500"></span>
                        <span class="text-sm font-medium text-slate-700 dark:text-slate-200 dark:text-slate-200">{{ __('Dark') }}</span>
                    </div>
                </label>
                <label class="cursor-pointer">
                    <input type="radio" name="appearance" value="system" class="hidden peer" x-model="theme" />
                    <div
                        class="flex items-center gap-2.5 px-5 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 dark:border-slate-700 peer-checked:border-primary peer-checked:bg-primary/5 transition-all duration-200 hover:border-slate-300 dark:hover:border-slate-600">
                        <span class="icon-[tabler--device-desktop] size-5 text-slate-500 dark:text-slate-400"></span>
                        <span class="text-sm font-medium text-slate-700 dark:text-slate-200 dark:text-slate-200">{{ __('System') }}</span>
                    </div>
                </label>
            </div>
        </div>
    </x-settings.layout>
</section>