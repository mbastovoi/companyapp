<x-header />


<h2 class="text-xl text-red-600 mt-10 text-center">Create a Company</h2>

<form class="mx-auto w-1/2" method="POST" action="/admin/company/create" enctype="multipart/form-data">
    @csrf
    <div class="flex-col align-center register-input">
        <x-form.input name="name" type="text" />
        <x-form.input name="slug" type="text" />
        <x-form.input name="description" type="text" />
        <x-form.input name="website" type="text" />
        <x-form.input name="logo" type="file" />


        <button class="bg-blue-200 mt-10 p-4 block m-auto rounded-xl px-10" type='submit'>Submit</button>
    </div>
</form>

    <x-footer />
