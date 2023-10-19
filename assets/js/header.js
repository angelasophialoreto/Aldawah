function goto_page(page_name) {
    window.location.href = `${base_url}${page_name}`;
}

function fetcher(route, content = null) {
    return fetch(`${base_url}${route.replaceAll('/', '_')}`, content ? content : undefined);
}