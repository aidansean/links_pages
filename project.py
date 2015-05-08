from project_module import project_object, image_object, link_object, challenge_object

p = project_object('links_pages', 'Links pages')
p.domain = 'http://www.aidansean.com/'
p.path = 'links_pages'
p.preview_image_ = image_object('http://placekitten.com.s3.amazonaws.com/homepage-samples/408/287.jpg', 408, 287)
p.folder_name = 'aidansean'
p.github_repo_name = 'links_pages'
p.mathjax = True
p.links.append(link_object(p.domain, 'keycode', 'Live page'))
p.introduction = 'When working on ATLAS and CMS I often needed to save links to poorly advertised pages.  This is where I store the links.'
p.overview = '''The links are saved with a colour scheme and each one has its own button that opens a link in a new window.  This allows me to find the correct links very quickly, often without having to remember the exact name of the page.'''

p.challenges.append(challenge_object('Getting the style right was tricky.', 'It took a while to get the CSS just right for this project, but after some iterating I got it sorted out in the end. ', 'Resolved'))
