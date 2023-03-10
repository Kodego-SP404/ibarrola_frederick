<ul class="flex flex-col md:flex-row px-4">
   @auth
      <li>
         <a href="/add/student" class="block py-2 pr-4 pl-3 flex flex-row">

         <svg class="fill-current text-amber-400 xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M18.125 13.75v-3h-3v-1.5h3v-3h1.5v3h3v1.5h-3v3ZM9 11.7q-1.45 0-2.475-1.038Q5.5 9.625 5.5 8.2q0-1.45 1.025-2.475Q7.55 4.7 9 4.7q1.45 0 2.475 1.025Q12.5 6.75 12.5 8.2q0 1.425-1.025 2.462Q10.45 11.7 9 11.7Zm-7.5 7.6v-2.225q0-.725.4-1.35.4-.625 1.075-.975 1.475-.725 2.988-1.088Q7.475 13.3 9 13.3t3.038.362q1.512.363 2.987 1.088.675.35 1.075.975.4.625.4 1.35V19.3ZM3 17.8h12v-.725q0-.3-.175-.55-.175-.25-.475-.425-1.3-.625-2.637-.963Q10.375 14.8 9 14.8t-2.713.337q-1.337.338-2.637.963-.3.175-.475.425t-.175.55Zm6-7.6q.825 0 1.413-.588Q11 9.025 11 8.2t-.587-1.413Q9.825 6.2 9 6.2q-.825 0-1.412.587Q7 7.375 7 8.2q0 .825.588 1.412.587.588 1.412.588Zm0-2Zm0 9.6Z"/></svg>Add New</a>
      </li>
      <li>
      <form action="/logout" method="POST">
         @csrf
         <button class="block py-2 pr-4 pl-3 flex flex-row">

            <svg class="fill-current text-amber-400 xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M5.4 21q-.75 0-1.275-.525Q3.6 19.95 3.6 19.2V5.3q0-.75.525-1.275Q4.65 3.5 5.4 3.5h6.725V5H5.4q-.1 0-.2.1t-.1.2v13.9q0 .1.1.2t.2.1h6.725V21Zm10.725-4.475-1.025-1.1L17.525 13h-8.4v-1.5h8.4L15.1 9.075l1.025-1.1L20.4 12.25Z"/></svg>Logout</a>
         </form>
      </li>    
 
   @else
          
      <li>
         <a href="/login" class="block py-2 pr-4 pl-3 flex flex-row">
            
         <svg class="fill-current text-amber-400 xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M11.875 21v-1.5H18.6q.1 0 .2-.1t.1-.2V5.3q0-.1-.1-.2t-.2-.1h-6.725V3.5H18.6q.75 0 1.275.525.525.525.525 1.275v13.9q0 .75-.525 1.275Q19.35 21 18.6 21Zm-1.25-4.475-1.05-1.1L12 13H3.6v-1.5H12L9.575 9.075l1.05-1.1 4.25 4.275Z"/></svg>Sign In</a>
      </li>
      <li>
         <a href="/register" class="block py-2 pr-4 pl-3 flex flex-row">
            
         <svg class="fill-current text-amber-400 xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M18.125 13.75v-3h-3v-1.5h3v-3h1.5v3h3v1.5h-3v3ZM9 11.7q-1.45 0-2.475-1.038Q5.5 9.625 5.5 8.2q0-1.45 1.025-2.475Q7.55 4.7 9 4.7q1.45 0 2.475 1.025Q12.5 6.75 12.5 8.2q0 1.425-1.025 2.462Q10.45 11.7 9 11.7Zm-7.5 7.6v-2.225q0-.725.4-1.35.4-.625 1.075-.975 1.475-.725 2.988-1.088Q7.475 13.3 9 13.3t3.038.362q1.512.363 2.987 1.088.675.35 1.075.975.4.625.4 1.35V19.3ZM3 17.8h12v-.725q0-.3-.175-.55-.175-.25-.475-.425-1.3-.625-2.637-.963Q10.375 14.8 9 14.8t-2.713.337q-1.337.338-2.637.963-.3.175-.475.425t-.175.55Zm6-7.6q.825 0 1.413-.588Q11 9.025 11 8.2t-.587-1.413Q9.825 6.2 9 6.2q-.825 0-1.412.587Q7 7.375 7 8.2q0 .825.588 1.412.587.588 1.412.588Zm0-2Zm0 9.6Z"/></svg>Sign Up</a>
      </li>
   @endauth
</ul>