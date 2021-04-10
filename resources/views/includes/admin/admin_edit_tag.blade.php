@guest()
@else
    <span class="admin-links admin-links-floating admin-links-sticky">
        <span class="admin-icon">
            <a href="{{ route('blog.tags.edit', $tag) }}" class="nu e2-edit-link e2-admin-link">
                <span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path stroke="none" fill-rule="evenodd" clip-rule="evenodd" d="M10.5 2.5l-8 8L1 15l4.5-1.5 8-8-3-3zm-5.25 9.25l-1-1L4 10.5l6.75-6.75 1.5 1.5L5.5 12l-.25-.25z"></path><path stroke="none" fill-rule="evenodd" clip-rule="evenodd" d="M13.999 2c-1.5-1.5-3 0-3 0l-1 1 3 3 1-1c.001 0 1.501-1.5 0-3zm-.749 2.25L13 4.5 11.5 3l.25-.25s.78-.719 1.499 0 .001 1.5.001 1.5z"></path></svg>
                </span>
            </a>
        </span>
    </span>
@endguest
