<x-layouts.admin>
    <x-slot:title>Create New Post</x-slot:title>
    
    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-2xl p-8 max-w-4xl mx-auto" 
         x-data="{
             tags: {{ json_encode(old('tags', [])) }},
             addTag(tag) {
                 const cleanTag = tag.trim().toLowerCase();
                 if (cleanTag && !this.tags.includes(cleanTag)) {
                     this.tags.push(cleanTag);
                     this.$refs.tagInput.value = '';
                 }
             },
             removeTag(index) {
                 this.tags.splice(index, 1);
             },
             featuredImagePreview: null,
             isUploading: false
         }">
        <!-- Header Section -->
        <div class="mb-10 text-center">
            <h2 class="text-4xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                <i class="fas fa-magic mr-3"></i>Craft Your Masterpiece
            </h2>
            <p class="mt-2 text-gray-400">Share your knowledge with the world</p>
        </div>

        <form method="POST" action="" enctype="multipart/form-data" class="space-y-10">
            @csrf

            <!-- Title Section -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-xl 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative">
                    <label class="block text-sm font-semibold text-gray-300 mb-3 flex items-center">
                        <i class="fas fa-heading text-blue-400 mr-2 text-lg"></i>Title
                    </label>
                    <input type="text" name="title" value="{{ old('title') }}" required
                           class="w-full bg-gray-700/50 border-2 border-gray-600/50 rounded-xl px-6 py-4 text-gray-100 
                                  focus:ring-4 focus:ring-blue-500/30 focus:border-blue-500 placeholder-gray-400
                                  transition-all duration-300 hover:border-gray-500">
                    @error('title')
                        <p class="text-red-400 text-sm mt-2 animate-pulse">
                            <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <!-- Content Editor -->
            <div class="space-y-4">
                <label class="block text-sm font-semibold text-gray-300 mb-3 flex items-center">
                    <i class="fas fa-align-left text-purple-400 mr-2 text-lg"></i>Content
                </label>
                <div class="border-2 border-gray-600/50 rounded-xl overflow-hidden hover:border-blue-500/30 
                           transition-colors duration-300">
                    <textarea name="content" id="editor" rows="10" required
                              class="w-full bg-gray-700/50 px-6 py-4 text-gray-100 
                                     focus:ring-4 focus:ring-blue-500/30 focus:border-transparent">{{ old('content') }}</textarea>
                </div>
                @error('content')
                    <p class="text-red-400 text-sm mt-2 animate-pulse">
                        <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Media Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Excerpt -->
                <div class="bg-gray-700/30 p-6 rounded-xl border-2 border-gray-600/50 
                           hover:border-blue-500/30 transition-colors duration-300">
                    <label class="block text-sm font-semibold text-gray-300 mb-4 flex items-center">
                        <i class="fas fa-quote-right text-green-400 mr-2 text-lg"></i>Excerpt
                    </label>
                    <textarea name="excerpt" rows="3" maxlength="300"
                              class="w-full bg-gray-800/20 rounded-lg px-4 py-3 text-gray-100 
                                     focus:ring-4 focus:ring-blue-500/30 border border-gray-600/50
                                     transition-all duration-300">{{ old('excerpt') }}</textarea>
                    <div class="mt-3 flex justify-between items-center text-gray-400 text-sm">
                        <span>Tell them what's inside...</span>
                        <span x-text="300 - $el.previousElementSibling.value.length"></span>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="bg-gray-700/30 p-6 rounded-xl border-2 border-gray-600/50 
                           hover:border-blue-500/30 transition-colors duration-300"
                     @dragover.prevent="isUploading = true" 
                     @dragleave.prevent="isUploading = false"
                     @drop.prevent="isUploading = false; featuredImagePreview = URL.createObjectURL($event.dataTransfer.files[0])">
                    <label class="block text-sm font-semibold text-gray-300 mb-4 flex items-center">
                        <i class="fas fa-camera-retro text-yellow-400 mr-2 text-lg"></i>Featured Image
                    </label>
                    <div class="relative group border-2 border-dashed border-gray-600/50 rounded-xl 
                                hover:border-blue-500 transition-all duration-300 h-64
                                flex items-center justify-center"
                         :class="{ 'border-blue-500 bg-blue-500/10': isUploading }">
                        <input type="file" name="featured_image" id="featured_image" 
                               class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                               @change="featuredImagePreview = URL.createObjectURL($event.target.files[0])">
                        <div class="p-6 text-center space-y-4">
                            <div class="text-4xl text-gray-400 group-hover:text-blue-400 
                                      transition-colors duration-300">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div>
                                <p class="text-gray-300 font-medium">Drag & Drop or Click</p>
                                <p class="text-gray-400 text-sm mt-1">PNG, JPG (max 2MB)</p>
                            </div>
                            <img x-show="featuredImagePreview" :src="featuredImagePreview" 
                                 class="mt-4 h-32 w-full object-cover rounded-lg border 
                                        border-gray-600 shadow-lg">
                        </div>
                    </div>
                    @error('featured_image')  <!-- Added error block -->
                        <p class="text-red-400 text-sm mt-2 animate-pulse">
                            <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <!-- Tags & Status -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Status -->
                <div class="bg-gray-700/30 p-6 rounded-xl border-2 border-gray-600/50 
                           hover:border-blue-500/30 transition-colors duration-300">
                    <label class="block text-sm font-semibold text-gray-300 mb-4 flex items-center">
                        <i class="fas fa-flag text-red-400 mr-2 text-lg"></i>Status
                    </label>
                    <div class="relative">
                        <select name="status" required
                                class="w-full bg-gray-800/20 border-2 border-gray-600/50 rounded-xl px-6 py-3 
                                       text-gray-100 focus:ring-4 focus:ring-blue-500/30 appearance-none 
                                       cursor-pointer hover:border-gray-500 transition-colors duration-300">
                            <option value="draft" class="bg-gray-800">Draft</option>
                            <option value="published" class="bg-gray-800">Published</option>
                        </select>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </div>

                <!-- Tags -->
                <div class="bg-gray-700/30 p-6 rounded-xl border-2 border-gray-600/50 
                           hover:border-blue-500/30 transition-colors duration-300">
                    <label class="block text-sm font-semibold text-gray-300 mb-4 flex items-center">
                        <i class="fas fa-tags text-green-400 mr-2 text-lg"></i>Tags
                    </label>
                    <div class="space-y-4">
                        <div class="flex flex-wrap gap-2">
                            <template x-for="(tag, index) in tags" :key="index">
                                <div class="bg-gradient-to-r from-blue-600/30 to-purple-600/30 px-3 py-1.5 rounded-full 
                                           flex items-center group transition-all duration-300 hover:scale-105 
                                           shadow-lg shadow-blue-500/10">
                                    <span x-text="tag" class="text-sm"></span>
                                    <button type="button" @click="removeTag(index)" 
                                            class="ml-2 opacity-70 hover:opacity-100 transition-opacity">
                                        <i class="fas fa-times text-xs"></i>
                                    </button>
                                </div>
                            </template>
                        </div>
                        <input type="hidden" name="tags" :value="JSON.stringify(tags)">
                        <input x-ref="tagInput" type="text" placeholder="Type and press Enter..."
                               @keydown.enter.prevent="addTag($event.target.value.trim())"
                               class="w-full bg-gray-800/20 border-2 border-gray-600/50 rounded-xl px-4 py-2 
                                      text-gray-100 placeholder-gray-500 focus:ring-4 focus:ring-blue-500/30 
                                      transition-all duration-300">
                    </div>
                </div>
            </div>

            <!-- SEO Section -->
            <div class="bg-gradient-to-br from-gray-700/30 to-gray-800/30 rounded-xl p-8 border-2 border-gray-600/50
                       hover:border-blue-500/30 transition-colors duration-300">
                <h3 class="text-lg font-semibold text-gray-300 mb-6 flex items-center">
                    <i class="fas fa-chart-line text-purple-400 mr-3"></i>SEO Optimization
                </h3>
                <div class="space-y-6">
                    <!-- SEO Fields -->
                    <div class="space-y-2">
                        <label class="text-gray-300 flex items-center">
                            <i class="fas fa-tag text-blue-400 mr-2 text-sm"></i>Meta Title
                        </label>
                        <input type="text" name="meta[title]" value="{{ old('meta.title') }}"
                               class="w-full bg-gray-800/20 border-2 border-gray-600/50 rounded-lg px-4 py-3 
                                      text-gray-100 focus:ring-4 focus:ring-blue-500/30 transition-all duration-300">
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-gray-300 flex items-center">
                            <i class="fas fa-align-left text-green-400 mr-2 text-sm"></i>Meta Description
                        </label>
                        <textarea name="meta[description]" rows="2"
                                  class="w-full bg-gray-800/20 border-2 border-gray-600/50 rounded-lg px-4 py-3 
                                         text-gray-100 focus:ring-4 focus:ring-blue-500/30 transition-all duration-300">{{ old('meta.description') }}</textarea>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-gray-300 flex items-center">
                            <i class="fas fa-key text-yellow-400 mr-2 text-sm"></i>Keywords
                        </label>
                        <input type="text" name="meta[keywords]" value="{{ old('meta.keywords') }}"
                               class="w-full bg-gray-800/20 border-2 border-gray-600/50 rounded-lg px-4 py-3 
                                      text-gray-100 focus:ring-4 focus:ring-blue-500/30 transition-all duration-300"
                               placeholder="e.g., web development, design, programming">
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-8">
                <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 
                               text-white px-8 py-5 rounded-xl font-bold transition-all duration-300 
                               transform hover:scale-[1.02] shadow-lg hover:shadow-blue-500/20
                               flex items-center justify-center gap-3 group">
                    <i class="fas fa-paper-plane text-xl group-hover:animate-bounce"></i>
                    Launch Post
                </button>
            </div>
        </form>
    </div>

    @push('styles')
        <style>
            select {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%239CA3AF'%3e%3cpath d='M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z'/%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-position: right 1rem center;
                background-size: 1.5em;
            }
            .ck-editor__editable {
                background: rgba(55, 65, 81, 0.5) !important;
                border: none !important;
                color: #fff !important;
                min-height: 300px;
            }
            .ck-toolbar {
                background: rgba(31, 41, 55, 0.8) !important;
                border: none !important;
            }
            #cke_notifications_area_editor{
                display: none;
            }
        </style>
    @endpush

    @push('scripts')
        <script src="{{asset('assets/ckeditor4/ckeditor.js')}}"></script>
            <script>
                CKEDITOR.replace('content',{
                    version:"4.25.11",
                    filebrowserUploadUrl:'',
                    filebrowserUploadMethod:'form'
                });
        </script>
    @endpush
</x-layouts.admin>