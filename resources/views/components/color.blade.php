@props(['tag'])

<div class="antialiased sans-seri ">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
      <style>
          [x-cloak] {
              display: none;
          }
      </style>
      <div x-data="app()" x-cloak>
          <div class="">
               
              <div class="mb-3">
                  <div class="flex items-center">
                      <div>
                          <label for="colorSelected" class="block font-bold mb-1">Color</label>
                          {{-- {!! Form::label('color', 'Ingresa Color', ['class'=>'form-control','color'=>'danger']) !!} --}}
                          {{-- {!! Form::text('color', null, ['class'=>'border border-transparent shadow px-4 py-2 leading-normal text-gray-700 bg-white rounded-md focus:outline-none focus:shadow-outline','x-model'=>'colorSelected','readonly']) !!} --}}
                          
                          <input name="color" type="text" placeholder="Ingrese color"
                              class="form-control border border-transparent shadow px-4 py-2 leading-normal bg-white text-gray-700 rounded-md focus:outline-none focus:shadow-outline"
                              readonly 
                              x-model="colorSelected" :style="`background: ${colorSelected}; color: white`">
                      </div>
                      <div class="relative ml-3 mt-8">                                                    
                          <button type="button" @click="isOpen = !isOpen" 
                              class="form-control w-10 h-10 rounded-full focus:outline-none focus:shadow-outline inline-flex p-2 shadow mr-64"
                              :style="`background: ${colorSelected}; color: white`"
                          >
                              <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" d="M15.584 10.001L13.998 8.417 5.903 16.512 5.374 18.626 7.488 18.097z"/><path d="M4.03,15.758l-1,4c-0.086,0.341,0.015,0.701,0.263,0.949C3.482,20.896,3.738,21,4,21c0.081,0,0.162-0.01,0.242-0.03l4-1 c0.176-0.044,0.337-0.135,0.465-0.263l8.292-8.292l1.294,1.292l1.414-1.414l-1.294-1.292L21,7.414 c0.378-0.378,0.586-0.88,0.586-1.414S21.378,4.964,21,4.586L19.414,3c-0.756-0.756-2.072-0.756-2.828,0l-2.589,2.589l-1.298-1.296 l-1.414,1.414l1.298,1.296l-8.29,8.29C4.165,15.421,4.074,15.582,4.03,15.758z M5.903,16.512l8.095-8.095l1.586,1.584 l-8.096,8.096l-2.114,0.529L5.903,16.512z"/></svg>
                          </button>
  
                          <div x-show="isOpen" @click.away="isOpen = false" x-transition:enter="transition ease-out duration-100 transform"
                              x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                              x-transition:leave="transition ease-in duration-75 transform"
                              x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                              {{-- class="origin-top-right absolute right-30 mt-40 w-40 rounded-md shadow-lg"> --}}
                              {{-- class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg"> --}}
                              class=" absolute -mx-0 -mr-64 -mt-0  rounded-md shadow-lg">
                              <div class="rounded-md bg-white shadow-xs px-72 ">
                                  <div class="flex flex-wrap -mx-0">
                                  <template x-for="(color, index) in colors" :key="index">
                                      <div 
                                          class="py-0"
                                      >
                                          <template x-if="colorSelected === color">	
                                              <div
                                                  class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white"
                                                  :style="`background: ${color}; box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2);`"
                                              ></div>
                                          </template>
                                          
                                          <template x-if="colorSelected != color">
                                              <div
                                                  @click="colorSelected = color"
                                                  @keydown.enter="colorSelected = color"
                                                  role="checkbox"
                                                    tabindex="0"
                                                    :aria-checked="colorSelected"	
                                                  class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white focus:outline-none focus:shadow-outline"
                                                  :style="`background: ${color};`"
                                              ></div>
                                          </template>
                                      </div>
                                  </template>
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
               
          </div>
      </div>
  
      <script>
          function app() {
              return {
                  isOpen: false,
                  colors: ['gray','green',
                           '#f7fafc','#edf2f7','#e2e8f0','#cbd5e0','#a0aec0','#718096','#4a5568','#2d3748','#1a202c',
                           '#fff5f5','#fed7d7','#feb2b2','#fc8181','#f56565','#e53e3e','#c53030','#9b2c2c','#742a2a',
                           '#fffaf0','#feebc8','#fbd38d','#f6ad55','#ed8936','#dd6b20','#c05621','#9c4221','#7b341e',
                           '#fffff0','#fefcbf','#faf089','#f6e05e','#ecc94b','#d69e2e','#b7791f','#975a16','#744210',
                           '#f0fff4','#c6f6d5','#9ae6b4','#68d391','#48bb78','#38a169','#2f855a','#276749','#22543d',
                           '#e6fffa','#b2f5ea','#81e6d9','#4fd1c5','#38b2ac','#319795','#2c7a7b','#285e61','#234e52',
                           '#ebf8ff','#bee3f8','#90cdf4','#63b3ed','#4299e1','#3182ce','#2b6cb0','#2c5282','#2a4365',
                           '#ebf4ff','#c3dafe','#a3bffa','#7f9cf5','#667eea','#5a67d8','#4c51bf','#434190','#3c366b',
                           '#faf5ff','#e9d8fd','#d6bcfa','#b794f4','#9f7aea','#805ad5','#805ad5','#553c9a','#44337a',
                           '#fff5f7','#fed7e2','#fbb6ce','#f687b3','#ed64a6','#d53f8c','#b83280','#97266d','#702459',
                           '#2196F3','#009688','#9C27B0','#FFEB3B','#afbbc9','#4CAF50','#2d3748','#f56565','#ed64a6',
                      ],
                  colorSelected: '{{$tag->color}}'
                 
              }
          }
      </script>
    </div>