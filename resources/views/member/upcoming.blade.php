<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Upcoming Class
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="width: 58%;margin-left:10%;">
                <div class="p-6 text-gray-900 max-w-2xl divide-y">
                    @forelse ($bookings as $class)
                        <div class="py-6">
                            <div class="flex gap-6 justify-between">
                                <div>
                                    <p class="text-2xl font-bold text-purple-700">{{ $class->classType->name }}</p>
                                    <p class="text-sm">{{ $class->instructor->name }}</p>
                                    <span class="text-slate-600 text-sm">{{ $class->classType->minutes }}minutes</span>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <p class="text-lg font-bold">{{ $class->date_time->format('g:i a') }}</p>
                                    <p class="text-sm">{{ $class->date_time->format('jS M') }}</p>
                                </div>
                            </div>
                            <div class="mt-1 text-right">
                                <form action="{{ route('booking.destroy',$class->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button class="px-3 py-1 "
                                        style="margin-left:85%;margin-top:3%" onclick="return confirm('Are you sure you want to cancel this class?')">Cancel</x-danger-button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div>
                            <p>You have no upcoming bookings. </p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
