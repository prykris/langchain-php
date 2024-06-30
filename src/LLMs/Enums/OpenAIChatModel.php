<?php

namespace Kambo\Langchain\LLMs\Enums;

enum OpenAIChatModel: string
{
    case Gpt35Turbo = "gpt-3.5-turbo";
    case Gpt4 = "gpt-4";
    case Gpt4o = "gpt-4o";
}
