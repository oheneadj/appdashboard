<div class="dropdown dropdown-end">
    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar online" data-test="sidebar-menu-button">
        <div class="w-10 rounded-full">
            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                alt="{{ auth()->user()->name }}" />
        </div>
    </div>
    <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
        <li>
            <div class="flex flex-col gap-1 items-start">
                <span class="font-bold">{{ auth()->user()->name }}</span>
                <span class="text-xs text-base-content/70">{{ auth()->user()->email }}</span>
            </div>
        </li>
        <li class="menu-title"></li>
        <li><a href="{{ route('profile.edit') }}" wire:navigate><span class="icon-[tabler--settings] size-4"></span>
                {{ __('Settings') }}</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left flex items-center gap-2" data-test="logout-button">
                    <span class="icon-[tabler--logout] size-4"></span>
                    {{ __('Log Out') }}
                </button>
            </form>
        </li>
    </ul>
</div>