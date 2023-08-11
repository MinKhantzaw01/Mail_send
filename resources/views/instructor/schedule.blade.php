<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Schedule a Class
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('schedule.store')}}" method="post" class="max-w-lg">
                    @csrf
                    <div class="sm:col-span-3">
                        <label style="margin: 10px;" class="block text font-medium leading-6 text-gray-900">Select type of
                            class</label>
                        <div style="margin: 15px;">
                            <select name="class_type_id"
                                class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                @foreach ($classTypes as $classType)
                                    <option value="{{$classType->id}}">{{$classType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex gap-6">
                            <div class="sm:col-span-2" style="margin: 10px">
                                <label for="date"
                                    class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                                <div class="mt-2">
                                    <input type="date" name="date"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" min="{{date('Y-m-d',strtotime('tomorrow'))}}">
                                </div>
                            </div>

                            <div class="sm:col-span-2" style="margin: 10px">
                                <label for="time" class="block text-sm font-medium leading-6 text-gray-900">
                                    Time</label>
                                <div class="mt-2">
                                    <select type="time" name="time" style="width: 14rem;"
                                        class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option value="05:00:00">5 am</option>
                                        <option value="06:00:00">6 am</option>
                                        <option value="07:00:00">7 am</option>
                                        <option value="08:00:00">8 am</option>
                                        <option value="17:00:00">5 pm</option>
                                        <option value="18:00:00">6 pm</option>
                                        <option value="19:00:00">7 pm</option>
                                        <option value="20:00:00">8 pm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" style="margin: 10px;"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">SCHEDULE</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
