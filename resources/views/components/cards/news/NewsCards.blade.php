 <div class="bg-white w-full mb-5 mt-9" data-aos="fade-up" data-aos-duration="1400">
     <div class="relative overflow-hidden bg-cover bg-no-repeat">
         <img src="{{$image}}" class="w-full h-[300px] transition duration-700 ease-in-out hover:scale-110" alt="Louvre" />
     </div>
     <div class="p-6 text-surface dark:text-dark">
         <h5 class="mb-2 text-xl font-medium leading-tight">{{$title}}</h5>
         <p class="mb-4 text-base">{{strlen($description) >= 150 ? substr($description, 0, 150)."..." : $description}}</p>
         <div class="flex justify-items-center justify-between">
             <a href="{{ route("news.show", ["news"=>$id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded duration-300 hover:bg-blue-600">Посмотреть</a>
             <p class="mt-2 text-base">{{$created_at}}</p>
         </div>
     </div>
 </div>

