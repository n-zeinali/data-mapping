# data-mapping
Mapping API Response ( JSON and XML) to Object using YAML file


# Version 1

I created a route which name is /data-mapping/{type}
I have DataMapperController that have mapping method which we can see the input of API and output of mapper
class ApiResponses is the input simulation
Trait Traits\DataMapper is using Annotation and reflection packages to map data into our database fields
I made a Mapping Module and bind it to laravel and made each directories separate
Try to make Single responsible each trait and class
I used strategy design pattern to be able to support xml and json data

# Version 2
read relation of data from YAML file which is made in config folder.
