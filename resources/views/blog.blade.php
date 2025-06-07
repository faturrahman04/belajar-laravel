

<x-layout>
  <x-slot:header>
    {{ $header }}
  </x-slot:header>

  @foreach ($posts as $post)
  <div class="border-b border-b-gray-300">
    <article class="py-4 max-w-5xl">
      <div>
        <a class="text-3xl font-semibold tracking-tight hover:underline" href="">
          {{ $post['judul'] }}
        </a>
      </div>
      <p>7 Juni 2025</p>
      <p class="text-gray-500">Oleh {{ $post['penulis'] }}</p>
      <p class="font-light my-4">{{ Str::limit($post['body'], 120) }}</p>
      <a class="text-blue-500 hover:underline" href="">Read more &raquo;</a>
    </article>
  </div> 
  @endforeach



</x-layout>