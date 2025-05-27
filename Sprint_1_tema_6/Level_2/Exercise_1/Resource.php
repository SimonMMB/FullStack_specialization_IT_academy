<?php
enum Topic : string {
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case Laravel = 'Laravel';
}
enum Type : string {
    case File = 'File'; 
    case Web_article = 'Web article';
    case Video = 'Video';
}
class TeachingResource {
    private string $name;
    private Topic $topic;
    private string $url;
    private Type $type;

    public function __construct(string $name, Topic $topic, string $url, Type $type) {
        $this->name = $name;
        $this->topic = $topic;
        $this->url = $url;
        $this->type = $type;
    }
    public function getName() : string {
        return $this->name;
    }
    public function getTopic() : Topic {
        return $this->topic;
    }
    public function getUrl() : string {
        return $this->url;
    }
    public function getType() : Type {
        return $this->type;
    }
    public function setName(string $name) : void {
        $this->name = $name;
    }
    public function setTopic(Topic $topic) : void {
        $this->topic = $topic;
    }
    public function setUrl(string $url) : void {
        $this->url = $url;
    }
    public function setType(Type $type) : void {
        $this->type = $type;
    }
}
?>