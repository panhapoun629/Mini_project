<x-layout>
    <section class="bg-fill">
        <div class="bg-white py-6">
            <div class="container max-w-7xl mx-auto">
                <h2 class="text-info text-3xl font-medium">CONTACT</h2>
            </div>
        </div>
        <div class="container max-w-7xl mx-auto">
            <div class=" py-8 space-y-3">
                <h3 class="text-info text-3xl">Interested in our services or products?</h3>
                <div class="text-info flex items-center text-lg">
                    <p>Write us a few words,
                        <span class="text-primary font-extrabold">We will contact you.</span>
                        Or don’t want to wait, Call us
                        <span class="text-primary font-extrabold">+855(0)23 880 208</span>
                    </p>
                </div>
            </div>
            
            {{-- Form Contact --}}
            <div>
                <div class="relative bg-white border rounded-lg overflow-hidden">
                    <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5 lg:divide-x-2">
                        <div class="bg-white px-4 sm:px-6 lg:col-span-3 lg:px-8 xl:pl-12 py-4">
                            <h2 class="text-2xl py-8 font-medium">Let’s get to know each other more</h2>
                            <div class="max-w-lg mx-auto lg:max-w-none">
                                <form action="#" method="POST" class="grid grid-cols-1 gap-4 lg:gap-6">
                                    <div class="grid grid-cols-2 gap-2 lg:gap-8">
                                        <div>
                                            <input type="text" name="full-name" id="full-name" autocomplete="name" class="block w-full shadow-sm py-2 lg:py-3 px-4 placeholder-gray-500 focus:ring-primary focus:border-primary border-gray-300 rounded-md" placeholder="NAME">
                                        </div>
                                        <div>
                                            <input id="phone" name="phone" type="text" autocomplete="tel" class="block w-full shadow-sm py-2 lg:py-3 px-4 placeholder-gray-500 focus:ring-primary focus:border-primary border-gray-300 rounded-md" placeholder="PHONE NUMBER *">
                                        </div>
                                    </div>
                                    <div>
                                        <input type="email" name="email" id="email" autocomplete="email" class="block w-full shadow-sm py-2 lg:py-3 px-4 placeholder-gray-500 focus:ring-primary focus:border-primary border-gray-300 rounded-md" placeholder="EMAIL">
                                    </div>
                                    <div>
                                        <label for="message" class="sr-only">Message</label>
                                        <textarea id="message" name="message" rows="6" class="block w-full shadow-sm py-2 lg:py-3 px-4 placeholder-gray-500 focus:ring-primary focus:border-primary border border-gray-300 rounded-md" placeholder="WRITE YOUR COMMENT HERE"></textarea>
                                    </div>
                                    <div>
                                        <div class="border w-1/3 bg-red-400">
                                            i'm not robot
                                        </div>
                                    </div>
                                    <div class="pb-4">
                                        <button type="submit" class="block mx-auto justify-center py-2 px-6 border border-transparent shadow-sm font-medium rounded-md text-white bg-primary hover:bg-[#008040] focus:outline-none focus:ring-2 focus:ring-offset focus:ring-primary uppercase">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div> 
                        <div class="px-4 sm:px-6 lg:col-span-2 lg:px-8 xl:pr-12 py-4">
                            <div class="max-w-lg mx-auto py-8">
                                <h2 class="text-2xl font-extrabold text-primary">
                                    Angkor E&C (Cambodia) Co.,Ltd.
                                </h2>
                                <div class="mt-8 text-base text-gray-500 space-y-4">   
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-[#DBDFEA] viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                        <p class="ml-3 flex items-center text-info">
                                            Phone: 
                                            <span class="ml-2">+855(0)23 880 208</span>
                                        </p>
                                    </div>
                                
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-[#DBDFEA]" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                        </svg>
                                        <p class="ml-3 flex items-center text-info">
                                            Email: 
                                            <span class="ml-2">
                                                info@aenccambodia.com
                                            </span>
                                        </p>
                                    </div>
                                
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-[#DBDFEA]" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                        </svg>
                                        <p class="ml-3 flex items-center text-info">
                                            Working Hours
                                            <span class="ml-2">
                                                Mon - Fri | 8AM - 5PM
                                            </span>
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-[#DBDFEA]" viewBox="0 0 21.646 27.783">
                                            <path id="location" d="M21.083,28.149c.4,0,1.693-.536,3.54-2.244,2.934-2.7,6.36-7.447,6.36-11.915a9.959,9.959,0,1,0-19.919,0C11.064,21.009,19.241,28,21.083,28.149Zm-.06-20.092A4.746,4.746,0,1,1,16.277,12.8a4.746,4.746,0,0,1,4.746-4.746ZM31.846,29.082c0,.928-3.818,2.731-10.823,2.731S10.2,30.01,10.2,29.082c0-.621,1.787-1.772,5.769-2.368a.665.665,0,0,0,.2-.065c1.867,1.762,3.694,2.894,4.8,2.979H21.1c1.489,0,3.659-1.832,4.533-2.636.109-.1.218-.209.328-.318a.993.993,0,0,0,.114.03C30.059,27.31,31.846,28.461,31.846,29.082Z" transform="translate(-10.2 -4.03)" fill="#dbdfea"/>
                                        </svg>                                          
                                        <p class="ml-3 flex items-center text-info leading-8">                               
                                            #99 St.313, Sangkat Boeung Kak II,Khan Toul Kok, 12152,Phnom Penh, Cambodia                                       
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="mt-8">
                                    <h2 class="text-info text-2xl font-extrabold py-2">Follow us </h2>
                                    <div class="relative items-center flex space-x-4 mt-4">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 25.074 24.906">
                                                <path id="Path_6" data-name="Path 6" d="M25.074,12.678a12.533,12.533,0,0,1-9.745,12.214V14.476h3.013V11H15.3v-.776c0-1.491.652-2.7,2.2-2.7a5.122,5.122,0,0,1,1.523.218L19.212,4.1A9.063,9.063,0,0,0,16.7,3.793a6.155,6.155,0,0,0-4.192,1.523,6.922,6.922,0,0,0-1.926,5.092V11H8.592v3.478h1.987V25.046a12.531,12.531,0,1,1,14.5-12.369Z" transform="translate(0 -0.14)" fill="#50658a" />
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24.906 24.906">
                                                <path id="linkedin_1_" data-name="linkedin (1)" d="M12.453,0A12.453,12.453,0,1,0,24.906,12.453,12.455,12.455,0,0,0,12.453,0ZM8.834,18.826H5.8V9.7H8.834ZM7.318,8.455H7.3A1.581,1.581,0,1,1,7.338,5.3a1.581,1.581,0,1,1-.02,3.153ZM19.771,18.826H16.738V13.944c0-1.227-.439-2.063-1.537-2.063a1.66,1.66,0,0,0-1.556,1.109,2.077,2.077,0,0,0-.1.74v5.1H10.513s.04-8.269,0-9.125h3.033v1.292a3.011,3.011,0,0,1,2.733-1.506c2,0,3.492,1.3,3.492,4.107Zm0,0" fill="#50658a" />
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24.906 24.906">
                                                <g id="youtube_1_" data-name="youtube (1)" transform="translate(0 0)">
                                                    <path id="Path_7" data-name="Path 7" d="M224.113,212.705l4.051-2.333-4.051-2.333Zm0,0" transform="translate(-213.211 -197.919)" fill="#50658a" />
                                                    <path id="Path_8" data-name="Path 8" d="M12.453,0A12.453,12.453,0,1,0,24.906,12.453,12.455,12.455,0,0,0,12.453,0Zm7.781,12.466a20.554,20.554,0,0,1-.32,3.743,1.95,1.95,0,0,1-1.372,1.372,47.332,47.332,0,0,1-6.089.321,45.638,45.638,0,0,1-6.089-.333A1.95,1.95,0,0,1,4.992,16.2a20.463,20.463,0,0,1-.321-3.743A20.54,20.54,0,0,1,4.992,8.71,1.99,1.99,0,0,1,6.364,7.326,47.332,47.332,0,0,1,12.453,7a45.541,45.541,0,0,1,6.089.333A1.95,1.95,0,0,1,19.914,8.71,19.5,19.5,0,0,1,20.235,12.466Zm0,0" fill="#50658a" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container max-w-7xl mx-auto">
            <h2 class="text-3xl text-info font-medium pt-8 pb-5">FIND US ON MAP</h2>
        </div>
        <div class="pb-14">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.7167740130376!2d104.88751321337865!3d11.572150091784584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095141d7b9e9c3%3A0x5649bb570efde54b!2sAngkor%20E%26C%20(Cambodia)%20Co.%2CLtd.!5e0!3m2!1sen!2skh!4v1629276786149!5m2!1sen!2skh" width="100%" height="481" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</x-layout>