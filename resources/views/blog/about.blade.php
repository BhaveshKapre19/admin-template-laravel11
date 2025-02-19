<x-layouts.blog>

    <x-slot:title>About Me</x-slot:title>

    <main class="min-h-screen pt-20">
        
        {{-- Hero Section --}}
        <section class="bg-primary text-background py-16">
            <div class="max-w-6xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Bhavesh Kapre</h1>
                <p class="text-xl md:text-2xl text-accent font-semibold">Computer Science Graduate | Software Developer | Tech Enthusiast</p>
            </div>
        </section>

        {{-- Profile Section --}}
        <section class="max-w-4xl mx-auto px-4 py-12 text-center">
            <img src="https://via.placeholder.com/150" alt="Bhavesh Kapre" class="w-40 h-40 rounded-full mx-auto shadow-lg mb-6">
            <h2 class="text-3xl font-bold text-accent mb-2">Hey there! 👋</h2>
            <p class="text-gray-600 text-lg">
                I'm Bhavesh Kapre, a self-motivated <strong>Computer Science Graduate (2022)</strong> with a passion for <strong>web development, cloud computing, and machine learning</strong>.  
                I enjoy problem-solving, working on <strong>real-world projects</strong>, and continuously expanding my skillset.  
                I have experience with <strong>Laravel, AWS, Machine Learning, and Web Development</strong>.
            </p>
        </section>

        {{-- Main Content --}}
        <div class="max-w-4xl mx-auto px-4 py-12">
            
            {{-- Journey Section with Tabs --}}
            <section class="mb-12" x-data="{ activeTab: 'education' }">
                <h2 class="text-3xl font-bold text-accent mb-6">My Journey 🚀</h2>
                
                {{-- Tabs Navigation --}}
                <div class="flex space-x-4 mb-6">
                    <button @click="activeTab = 'education'" 
                            :class="activeTab === 'education' ? 'bg-accent text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
                            class="px-4 py-2 rounded-lg transition duration-300 cursor-pointer">
                        Education 🎓
                    </button>
                    <button @click="activeTab = 'skills'" 
                            :class="activeTab === 'skills' ? 'bg-accent text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
                            class="px-4 py-2 rounded-lg transition duration-300 cursor-pointer">
                        Skills 🛠️
                    </button>
                    <button @click="activeTab = 'projects'" 
                            :class="activeTab === 'projects' ? 'bg-accent text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
                            class="px-4 py-2 rounded-lg transition duration-300 cursor-pointer">
                        Projects 💻
                    </button>
                </div>

                {{-- Education Tab --}}
                <div x-show="activeTab === 'education'" class="space-y-4 transition-opacity duration-300">
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">🎓 B.Tech in Computer Science & Engineering (2022)</h3>
                        <p class="text-gray-600">Shivajirao Kadam Institute of Technology and Management - CGPA: 7.5</p>
                        <h3 class="text-xl font-semibold mb-2 mt-4">🎓 Diploma in Computer Science & Engineering (2019)</h3>
                        <p class="text-gray-600">Thakur Shivkumarsingh Memorial Polytechnic College, Burhanpur - CGPA: 7.3</p>
                    </div>
                </div>

                {{-- Skills Tab --}}
                <div x-show="activeTab === 'skills'" class="space-y-4 transition-opacity duration-300">
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">🛠️ My Technical Skills</h3>
                        <ul class="list-disc list-inside mt-2 space-y-2 text-gray-700">
                            <li>🌐 <strong>Web Development:</strong> Laravel, PHP, Tailwind, Bootstrap</li>
                            <li>☁️ <strong>Cloud Computing:</strong> AWS (EC2, S3, IAM, AMI)</li>
                            <li>📜 <strong>Programming Languages:</strong> Python, Java, PHP</li>
                            <li>💾 <strong>Databases:</strong> MySQL, PostgreSQL, SQL</li>
                            <li>🛡️ <strong>Security & Networking:</strong> Linux Server Management, Authentication</li>
                        </ul>
                    </div>
                </div>

                {{-- Projects Tab --}}
                <div x-show="activeTab === 'projects'" class="space-y-4 transition-opacity duration-300">
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">💻 Notable Projects</h3>
                        <div class="space-y-4">
                            <div class="p-4 bg-gray-100 rounded-lg">
                                <h4 class="text-lg font-semibold text-accent">📌 Cloud Infrastructure Deployment for FileCloud Using AWS</h4>
                                <p class="text-gray-600">Deployed FileCloud using AWS AMI, EC2, S3, and IAM roles.</p>
                            </div>
                            <div class="p-4 bg-gray-100 rounded-lg">
                                <h4 class="text-lg font-semibold text-accent">📌 Predicting Stock Prices Using Machine Learning</h4>
                                <p class="text-gray-600">Built ML models using Python and Dash to predict stock prices.</p>
                            </div>
                            <div class="p-4 bg-gray-100 rounded-lg">
                                <h4 class="text-lg font-semibold text-accent">📌 Corn Disease Detection</h4>
                                <p class="text-gray-600">Developed a machine learning model using transfer learning and Flask.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</x-layouts.blog>
