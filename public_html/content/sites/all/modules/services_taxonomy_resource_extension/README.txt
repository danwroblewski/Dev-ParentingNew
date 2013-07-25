Extends functionality for the taxonomy resource available through services
module.

Additional Authentication:
- Provides the ability to define a specific vocabulary(or vocabularies) that
requests made to taxonomy resources can have access to.

Additional Resources:
- search_term - provides a resource to search for a taxonomy term.
  - POST data = [
    'term' => term name to search for.
    'exact_match' => perform an exact search for the term.
    'parent' => term parent can be sent as tid or term name.
    'vid' => vocabulary to search within, must be vid.
  ]
- getlist - provides a resource to get a list of available vocabularies.